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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('default',function(){
  return view ('layouts.default');
});

//login start
Auth::routes();
Route::get('daftar', 'Registrasi@index')->name('daftar');
Route::get('logout',function(){
  Auth::logout();
  return view('welcome');
});
//Login end


/**
 * [Route crud spb]
 * @var [stard]
 */

Route::get('spb','SpbController@index');

Route::get('create','SpbController@create')->name('create');
Route::post('store','SpbController@store');
Route::get('{id}/edit','SpbController@edit')->name('id.edit');
Route::patch('update/{id}','SpbController@update');
Route::delete('delete/{id}','SpbController@destroy');
Route::get('spb/{id}/','SupervisorController@show');

/**
 * [Route crud]
 * @var [end]
 */

Route::resource('supervisor','SupervisorController');
Route::get('supervisor.show/{id}','SupervisorController@show');
Route::patch('supervisor.update/{id}','SupervisorController@update');


// Route::patch('update/{id}','SupervisorController@update');


Route::get('hapus','SupervisorController@hapus')->middleware('CekLevel');


Route::get('cobain/{list}',function(){
  return view('cobain');
});
