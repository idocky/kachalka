<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::group(['middleware' => 'guest'], function(){
    Route::get('/registration', 'App\Http\Controllers\AuthController@register_page');
    Route::post('/register', 'App\Http\Controllers\AuthController@register')->name('register');
});

Route::group(['middleware' => 'auth'], function() {
    Route::post('/assignClientToWorkout/{workout_id}', 'App\Http\Controllers\WorkoutController@assignClientToWorkout')->name('assignClientToWorkout');
});
