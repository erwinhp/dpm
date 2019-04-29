<?php

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



Route::resource ('iexcel','CimportExcel');
Route::resource ('ijam','CjamFilter');
Route::resource ('iexcelpra','iexcelPra');
Route::resource ('ijampra','cJamPra');
Route::resource ('dfilter','cdetailFilter');
Route::resource ('filter3mth','c3mth');
Route::resource ('mapspel','maps');
