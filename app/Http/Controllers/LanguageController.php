<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // public function changeLanguage(Request $request)
    // {
    //     // dd($request);
    //     $locale = $request->input('language');
    //     // if (in_array($locale, ['en', 'es'])) {
    //         app()->setLocale($locale);
    //     // }
    //     return redirect()->back();
    // }
    public function index(Request $request,$locale) {
        //set’s application’s locale
        app()->setLocale($locale);
        
        //Gets the translated message and displays it
        echo trans('lang.welcome');
     }
}
