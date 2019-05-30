<?php

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
//     return view('index');
// });

Route::get('/','IndexController@index');

Route::get('about',function(){

    return view('indexx');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('Categories', 'CategoriesController@index');
Route::get('Categories/create', 'CategoriesController@create');
Route::post('Categories', 'CategoriesController@store');
Route::get('Categories/{edit}/edit','CategoriesController@edit');
Route::patch('Categories/{edit}', 'CategoriesController@update');
Route::delete('Categories/{delete}', 'CategoriesController@destroy');
Route::get('Categories/{category}', 'CategoriesController@show');



Route::get('News', 'NewsController@index')->name('News');
Route::get('News/create', 'NewsController@create');
Route::post('News', 'NewsController@store');

Route::get('Categories/{category}', 'IndexController@show');
Route::get('More/{detail}', 'NewsController@show');
