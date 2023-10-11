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

// Route::get('/welcome', function () {
//     return view('welcome');
// }) -> name('welcome');

Route::get('/', function () {
    return view('home');
}) -> name('home');

Route::get('/nav', function () {
    return view('nav');
}) -> name('nav');

Route::get('/features', function () {
    $features=['facebook','instagram','youtube'];
    return view('features',compact('features'));
}) -> name('features');