<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//get
Route::get('getuserskill', 'apisample@getuserskill');

//get id
Route::get('getuserskills/{id}', 'apisample@getuserskills');

//post store
Route::post('subjects/store', 'SubjectsController@store')->name('subjects.store');

//delete id
Route::get('subjects/delete/{id}', 'SubjectsController@destroy')->name('subjects.delete');
