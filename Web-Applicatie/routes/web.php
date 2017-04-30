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

Route::get('/maandag', 'WeekdagenController@geefMaandag');

    //$vakken = DB::table('Vakken')->get();

    // return view('maandag', compact('vakken'));

Route::get('/dinsdag', 'WeekdagenController@geefDinsdag');

Route::get('/woensdag', 'WeekdagenController@geefWoensdag');

Route::get('/donderdag', 'WeekdagenController@geefDonderdag');

Route::get('/vrijdag', 'WeekdagenController@geefVrijdag');