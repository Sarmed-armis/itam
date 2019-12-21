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

Route::get('/', function () {
    $cats=\App\Category::all();
    return view('welcome',compact('cats'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/Store', 'HomeController@StoreCategory');
Route::get('/cat/{id}','CatogController@DisplayCategoryDetail');
Route::get('/accounts','AccountController@Displayaccounts');
Route::post('/CreateAccount','AccountController@CreateAccount');
Route::get('/Dashboard','DashboardController@Dashboard');


