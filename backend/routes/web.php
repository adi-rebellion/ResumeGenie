<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

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


Route::get('/login', function () {
})->name("login");

Route::get('/make/user/1/json', 'ResumeController@add_user_json');
Route::get('/user/preview/json', 'ResumeController@preview_json');
