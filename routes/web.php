<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/projects', 'ProjectController@index')->name('home');

Route::resource('projects', 'ProjectController');
