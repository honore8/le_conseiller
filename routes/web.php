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
Route::get('/layout', function () {
    return view('layout');
})->name('layout');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');