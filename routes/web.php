<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/index-3.html'));
});

Route::get('index-1.html', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/index-1.html'));
});


Route::get('index-2.html', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/index-2.html'));
});


Route::get('index-3.html', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/index-3.html'));
});

Route::get('index-4.html', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/index-4.html'));
});

Route::get('index-5.html', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/index-5.html'));
});

Route::get('about.html', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/about.html'));
});


Route::get('contact.html', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/contact.html'));
});

Route::get('mail.php', function () {
    return view('welcome')->with('post', file_get_contents(__DIR__ . '/../resources/pages/mail.php'));
});
