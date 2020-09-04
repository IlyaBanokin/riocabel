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
    $methods = ['index', 'store'];
    $methodsCategories = ['index', 'show'];

    Route::resource('/', 'MainController')
        ->names('shop.main')
        ->only($methods);

    Route::resource('/catalog', 'CategoriesController', [
        'parameters' => [
            'catalog' => 'slug',
        ]])
        ->only($methodsCategories)
        ->names('shop.categories');

    //Route::get('/catalog/{alias}', ['uses' => 'CategoriesController@show', 'as' => 'product.info'])
    Route::post('/callback', ['uses' => 'MainController@callback', 'as' => 'shop.main.callback']);
    Route::get('/search/result', ['uses' => 'SearchController@index', 'as' => 'search.result']);
    Route::get('/autocomplete', ['uses' => 'SearchController@search', 'as' => 'products.search']);
});
