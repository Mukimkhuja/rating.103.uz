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
    return view('welcome');
});

Route::get('/enter/jobrating', function () {
    return view('/enter/jobrating');
});
Route::get('/enter/docrating', function () {
    return view('/enter/docrating');
});

Route::get('/show', function () {
    return view('/show');
})->name('show_page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
