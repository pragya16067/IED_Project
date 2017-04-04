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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'CouponsController@index');

Route::get('/coupons', 'CouponsController@index');
Route::get('/coupons/{coupon}/edit', 'CouponsController@showCoupon');
Route::post('/coupons/{coupon}/block', 'CouponsController@setCardStatus');
Route::delete('/coupons/{coupon}', 'CouponsController@destroy');
Route::get('/coupons/{coupon}', 'CouponsController@show');
Route::post('/coupons/{coupon}', 'CouponsController@save');

