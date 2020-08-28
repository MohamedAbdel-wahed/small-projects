<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;






route::group(['prefix'=>'todos'], function(){
    Route::get('/', 'ItemController@index')->name('index');
    Route::get('/create', 'ItemController@create')->name('create');
    Route::post('/', 'ItemController@store')->name('store');
    Route::get('/show/{item}', 'ItemController@show')->name('show');
    Route::get('/edit/{item}', 'ItemController@edit')->name('edit');
    Route::patch('/{item}', 'ItemController@update')->name('update');
    Route::delete('/{item}', 'ItemController@destroy')->name('destroy');
});