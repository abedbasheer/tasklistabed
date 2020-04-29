<?php



    
    Route::get('/', 'TaskController@index');

    Route::get('task/{id}', 'TaskController@show');
    
    Route::post('store', 'TaskController@store')->name('store');

    Route::delete('delete/{id}', 'TaskController@destroy');

    Route::put('edit/{id}', 'TaskController@edit');

    Route::patch('update/{id}','TaskController@update')->name('update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
