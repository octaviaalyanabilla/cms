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
Route::get('Home', 'HomeController@home');
Route::get('master', 'MasterController@master');
Route::get('product', 'ProductController@product');
Route::get('news', 'NewsController@news');
Route::get('program', 'ProgramController@program');
Route::get('aboust-us', 'AboutusController@aboutus');
Route::get('contact-us', 'ContactusController@contactus');
