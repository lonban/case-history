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

Route::group(['prefix'=>'/case_history','namespace'=>'\Lonban\CaseHistory\Controllers'],function(){
    Route::get('/aaa', 'RecordsController@index');
});