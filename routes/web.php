<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/kawsay', 'KawsayController@index');
Route::get('/weather', [WeatherController::class, 'index'])->name('weather');
//Route::get('/weather', [WeatherController::class, 'index']);

//Route::get('/weather', 'WeatherController@index');
//Route::get('/weather', 'App\Http\Controllers\WeatherController@index');

