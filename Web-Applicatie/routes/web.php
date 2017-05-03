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
    return view('index');
});

Route::get('/maandag', 'WeekdagenController@CheckKlas');

Route::get('/dinsdag', 'WeekdagenController@GeefDinsdag');

Route::get('/woensdag', 'WeekdagenController@GeefWoensdag');

Route::get('/donderdag', 'WeekdagenController@GeefDonderdag');

Route::get('/vrijdag', 'WeekdagenController@GeefVrijdag');