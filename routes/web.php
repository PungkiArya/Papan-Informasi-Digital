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



Route::get('papan', function () {
    return view('papan');
});

Route::get('/', function () {
    return view('new');
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
