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
    return view('homepage/index');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/Menu', function () {
    return view('Menu');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/login',function (){
    return view ('homepage.login');
});

Route::get('/registrasi',function (){
    return view ('homepage.regist');
});