<?php

use App\Http\Resources\AnswerResource;
use App\Models\Product;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

Route::post('/user', 'UserController@store');

Route::get('/user-types', 'UserTypeController@index');

Route::get('/phase/{id}', 'PhaseController@show');

Route::post('/activity', 'ActivityController@create');
Route::post('/activity/update/{id}', 'ActivityController@update')->name('update.activity');

Route::get('/user-report/{id}','UserController@getMail');


Route::post('/activity/{id}/products','ActivityController@getProducts');

