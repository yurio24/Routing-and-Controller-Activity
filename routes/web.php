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


Route::get('/about-me', 'App\Http\Controllers\AboutMeController@index')->name('about-me');

Route::get('/skills', 'App\Http\Controllers\SkillsController@index')->name('skills');

Route::get('/hobbies', 'App\Http\Controllers\HobbiesController@index')->name('hobbies');