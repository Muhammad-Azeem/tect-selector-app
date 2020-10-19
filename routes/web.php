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
    return view('index');
});



Route::group( ['prefix' => '/activities','middleware' => ['auth', 'admin']], function() {
    Route::get('/', 'ActivityController@index');
    Route::get('/{id}', 'ActivityController@view');
});


Auth::routes(['register' => false]);
//Route::middleware(['auth','admin'])->group(function() {
Route::get('/home', 'HomeController@index')->name('home');
//});