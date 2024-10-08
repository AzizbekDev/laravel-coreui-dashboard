<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function setLocale(Request $request)
    {
        $locale = $request->input('locale');

        session(['locale' => $locale]);

        return response()->json([
            'message' => 'Locale updated',
            'locale'  => $locale
        ]);
    }
}
