<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('register', [\App\Http\Controllers\UserController::class, 'register']);

Route::apiResource('airports', \App\Http\Controllers\AirportController::class, ['index']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', [\App\Http\Controllers\UserController::class, 'details']);
//    Route::get('book', 'BooksController@getAll');
//    Route::post('book', 'BooksController@create');
//    Route::get('book', 'BooksController@getAll');
//    Route::get('book/{isbn}', 'BooksController@getBookByISBN');
//    Route::post('book', 'BooksController@create');
//    Route::put('book/{id}', 'BooksController@update');
//    Route::delete('book/{id}', 'BooksController@delete');
});
