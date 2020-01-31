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

//Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//Pour se log uniquement mettre en commentaire la ligne Auth::routes() et décommenter celles ci-dessous
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::get('/nimda/stocks', 'NimdaController@stock')->name('nimdaStock');
Route::post('/nimda/saveNewStocks', 'NimdaController@saveStocks')->name('nimdaSaveStocks');

Route::get('/nimda/commandes', 'NimdaController@order')->name('nimdaOrder');
Route::post('/nimda/addNewOrder', 'NimdaController@addOrder')->name('nimdaAddOrder');

Route::get('/nimda/historique-des-commandes', 'NimdaController@orderHistory')->name('nimdaOrderHistory');

Route::get('/nimda/pertes', 'NimdaController@loss')->name('nimdaLoss');
Route::post('/nimda/pertes/ajout', 'NimdaController@addLoss')->name('nimdaAddLoss');

Route::get('/nimda/marges', 'NimdaController@cost')->name('nimdaCost');

Route::get('/nimda/reservations', 'NimdaController@booking')->name('nimdaBooking');
