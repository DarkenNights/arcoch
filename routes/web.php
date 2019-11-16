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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/restaurant', 'DinnerController@dinner')->name('dinner');
Route::get('/restaurant/carte', 'DinnerController@getCard')->name('dinnerCard');

Route::get('/chambres', 'RoomsController@rooms')->name('rooms');

Route::get('/conciergerie', 'ConciergeController@concierge')->name('concierge');

Route::get('/contact', 'ContactController@contact')->name('contact');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//Pour se log uniquement mettre en commentaire la ligne Auth::routes() et décommenter celles ci-dessous
//Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('admin/login', 'Auth\LoginController@login');

Route::get('/nimda/stock', 'NimdaController@stock')->name('nimdaStock');
