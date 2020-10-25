<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/cars', 'App\Http\Controllers\CreateController@allCars')->name('cars');
Route::get('/cars/{id}', 'App\Http\Controllers\CreateController@ShowCar')->name('ShowCar');
Route::post('/create/submit', 'App\Http\Controllers\CreateController@submit')->name('create-form');
Route::get('/cars/{id}/change', 'App\Http\Controllers\CreateController@change')->name('change');
Route::get('/cars/{id}/delete', 'App\Http\Controllers\CreateController@cardelete')->name('cardelete');
Route::post('/cars/{id}/change', 'App\Http\Controllers\CreateController@update')->name('update');
