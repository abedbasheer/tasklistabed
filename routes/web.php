<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('child');
    
    });
    
    Route::get('tasks', 'TaskController@index');

    Route::get('task/{id}', 'TaskController@index');
    