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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function() {
    return view('adminlte.master');
});

Route::get('/items',function() {
    return view('items.index');
});

Route::get('/items/create', function() {
    return view('items.create');
});
*/

Route::get('/', function () {
    return view('adminlte.init');
});

Route::get('/data-tables', function() {
    return view('items.data_table');
});

<<<<<<< HEAD
Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index');
=======
Route::get('/pertanyaan', 'PertanyaanController@index');
>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan','PertanyaanController@store');

Route::get('/pertanyaan/{pertanyaan_id}','PertanyaanController@show');

Route::get('/pertanyaan/{pertanyaan_id}/edit','PertanyaanController@edit');

Route::put('/pertanyaan/{pertanyaan_id}','PertanyaanController@update');

Route::delete('pertanyaan/{pertanyaan_id}','PertanyaanController@destroy');
<<<<<<< HEAD

//Route::resource('this_pertanyaan','This_pertanyaanController');
Route::resource('pertanyaan', 'PertanyaanController');
=======
>>>>>>> 848e9e6b5c9113f948ce67948c7b63a5c11bbb39
