<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'SessionController@login');
Route::get('connections', 'ConnectionController@index');
Route::get('products', 'ProductController@index')->middleware('verify');
Route::get('sellers', 'SellerController@index')->middleware('verify');
Route::get('seller_user', 'SellerController@findSeller')->middleware('verify');
Route::get('users', 'SellerController@users')->middleware('verify');
Route::get('clients', 'ClientController@index')->middleware('verify');
Route::get('conditions', 'ProformaController@conditions')->middleware('verify');
Route::post('proforma/create', 'ProformaController@create')->middleware('verify');
