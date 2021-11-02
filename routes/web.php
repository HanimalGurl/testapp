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
    return view('welcome');
});

Route::get('/me', function () {
    return 'this is my home';
});

Route::get('me/{name?}', function($name){
    return "Hi $name!";
});

Route::redirect('/home','/me',301);

Route::get('my/{name}', function($name){
    return "Hi $name!";
});


