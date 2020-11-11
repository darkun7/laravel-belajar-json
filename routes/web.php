<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ArtikelController@index')->name('index');
Route::resource('artikel',"ArtikelController");
