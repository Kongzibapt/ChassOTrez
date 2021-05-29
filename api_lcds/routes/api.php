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

// Email
Route::get('/emails','App\Http\Controllers\EmailController@index');
Route::post('/emails','App\Http\Controllers\EmailController@store');


// Team
Route::get('/teams','App\Http\Controllers\TeamController@index');
Route::post('/teams','App\Http\Controllers\TeamController@store');
