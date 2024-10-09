<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use App\Models\Setting;

class SettingController extends Controller
{

    /**
     * Display the settings page.
     */
    public function settings(): View 
    {

        $pageTitle = 'Settings';
        $settings  = Setting::all();
        return view('settings.index', compact('settings','pageTitle'));
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
}
