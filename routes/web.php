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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('Message', function () {
//     echo "welcom to laravel";
// });

// Route::get('Register', function () {
//     return view('register');
// });

// Route::view('Register','register');


// Route::get('Test','testController@Test');

// Route::get('test','userController@register');

Route::get('Register','userController@register');
Route::post('doRegister','userController@saveData');
Route::get('showData','userController@UserData');




