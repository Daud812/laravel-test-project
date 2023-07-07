<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
});

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/test', function() {
    return view('test');
 });
 
 Route::get('/test2', function() {
    return view('test2');
 });

// Route::get('/test', ['as'=>'testing',function() {
//     return view('test');
//  }]);
 
//  Route::get('redirect',function() {
//     return redirect()->route('testing');
//  });
//  Route::get('/form',function() {
//     return view('form');
//  });
//  Route::post('/change-language', [App\Http\Controllers\LanguageController::class, 'changeLanguage'])->name('changeLanguage');
Route::get('localization/{locale}',[App\Http\Controllers\LanguageController::class, 'index']);
Route::get('/validation',[App\Http\Controllers\ValidationController::class, 'showform']);
Route::post('/validation',[App\Http\Controllers\ValidationController::class, 'validateform']);

Route::get('/uploadfile',[App\Http\Controllers\UploadFileController::class, 'index']);
Route::post('/uploadfile',[App\Http\Controllers\UploadFileController::class, 'showUploadFile']);

// Route::get('sendbasicemail',[App\Http\Controllers\MailController::class, 'basic_email']);
// Route::get('sendhtmlemail',[App\Http\Controllers\MailController::class, 'html_email']);
// Route::get('sendattachmentemail',[App\Http\Controllers\MailController::class, 'attachment_email']);
Route::get('send-mail', [App\Http\Controllers\MailController::class, 'index']);

Route::get('ajax',function() {
    return view('ajax');
 });
 Route::post('/getmsg',[App\Http\Controllers\AjaxController::class, 'index']);
