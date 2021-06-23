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

Route::get('/login', ['as' => 'login.index', 'uses' => 'LoginController@index']); //name route in different syntex
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::get('/register', function () {
    echo "this is signup page...";
});


Route::group(['middleware' => ['sess']], function () {

    Route::get('/home', 'HomeController@index')->middleware('sess');
    Route::get('/xyz/list', 'UserController@index')->name('user.index'); //name route name(controller.function)
    Route::get('/user/details/{id}', 'UserController@details')->name('user.details'); //name route name(controller.function);

    Route::group(['middleware' => ['type']], function () {

        Route::get('/user/create', 'UserController@create');
        Route::post('/user/create', 'UserController@insert');
        Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');;
        Route::post('/user/edit/{id}', 'UserController@update');
        Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');;
        Route::post('/user/delete/{id}', 'UserController@destroy');
    });
});

Route::resource('/product', 'ProductController');