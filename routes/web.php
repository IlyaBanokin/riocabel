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

/*Клиентская часть*/
Route::group(['namespace' => 'Shop'], function () {
    $methods = ['index'];

    Route::resource('/', 'MainController')
        ->names('shop.main')
        ->only($methods);
});
