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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/feepayments','HomeController@display')->name('display');

// Students Routes
Route::get('/students', 'StudentsController@index')->name('student');
Route::post('/students', 'StudentsController@storeStudent')->name('storeStudent');

// Fees Routes
Route::get('/fees', 'FeesController@index')->name('fees');
Route::post('/fees', 'FeesController@storePayment')->name('storePayment');
