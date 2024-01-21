<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',function () {
    return view('admin.dashboard');
});

Route::get('products',function () {
    return view('admin.products');
});

Route::get('users',function () {
    return view('admin.users');
});

Route::get('settings',function () {
    return view('admin.settings');
});

Route::get('pricings',function () {
    return view('pages.pricings');
});

Route::get('maintenances',function () {
    return view('pages.maintenances');
});

Route::get('not-found-404',function () {
    return view('pages.404');
});

Route::get('server-error-500',function () {
    return view('pages.500');
});

Route::get('login',function () {
    return view('authentication.login');
});

Route::get('register',function () {
    return view('authentication.register');
});

Route::get('forgot-password',function () {
    return view('authentication.forgot-password');
});

Route::get('reset-password',function () {
    return view('authentication.reset-password');
});

Route::get('profile-lock',function () {
    return view('authentication.profile-lock');
});