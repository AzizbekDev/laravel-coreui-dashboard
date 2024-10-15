<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Setting;

class SettingController extends Controller
{

    /**
     * Display the settings page.
     */
    public function settings(): View 
    {
        $this->authorizeAction('view-settings');
        $pageTitle = 'Settings';
        $settings  = Setting::get()->pluck('value', 'key');
        return view('settings.index', compact('settings','pageTitle'));
    }

    public function update(Request $request): RedirectResponse
    {
        $this->authorizeAction('update-settings');
        
        $status = 'update-failed';

        if($request->hasFile('app_logo')){
            $validatedData = $request->validateWithBag('updateLogo', [
                'app_logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);
        }else{
            $validatedData = $request->validateWithBag('updateAppInfo', [
                'app_name'        => ['required', 'string', 'max:255'],
                'app_description' => ['required', 'string', 'max:255'],
                'app_url'         => ['required', 'url', 'max:255'],
                'app_email'       => ['required', 'email', 'max:255'],
                'app_phone'       => ['required', 'string', 'max:255'],
            ]);
        }

        DB::transaction(function () use ($request, &$status, $validatedData) {
            if(array_key_exists('app_logo', $validatedData)){
                $setting  = Setting::where('key', 'app_logo')->first();
                $oldLogo  = $setting->value ?? null;
                $logoName = $this->uploadLogo($request->file('app_logo'), $oldLogo);
                $setting->update(['value' => $logoName]);
                $status   = 'logo-updated';
            } else {
                $updateData = collect($validatedData)->map(function ($value, $key) {
                    return [
                        'key'   => $key,
                        'value' => $value
                    ];
                })->values()->toArray();
                
                Setting::upsert($updateData, ['key'], ['value']);
                $status   = 'app-info-updated';
            }
            toast_message('success', 'Settings updated successfully');
        });

        return redirect()->back()->with('status', $status);
    }

    /**
     * Set the locale for the user.
     */
    public function setLocale(Request $request): JsonResponse
    {
        $locale = $request->input('locale');

        session(['locale' => $locale]);

        return response()->json([
            'message' => 'Locale updated',
            'locale'  => $locale
        ]);
    }

    /**
     * Upload the logo.
     */
    private function uploadLogo($newLogo, $oldLogo): string
    {
        return fileUploader($newLogo, getFilePath('brand'), getFileSize('brand'), $oldLogo);
    }
}
