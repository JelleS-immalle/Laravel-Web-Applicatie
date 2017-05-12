<?php

Route::get('/', function () {
	$subjects = \App\Subject::all();

    return View::make('layouts/master');
});

Route::get('/maandag', 'SubjectController@GeefMaandag');

Route::get('/dinsdag', 'SubjectController@GeefDinsdag');

Route::get('/woensdag', 'SubjectController@GeefWoensdag');

Route::get('/donderdag', 'SubjectController@GeefDonderdag');

Route::get('/vrijdag', 'SubjectController@GeefVrijdag');

Route::get('/studentLessen', 'StudentController@GeefLessenLeerling');