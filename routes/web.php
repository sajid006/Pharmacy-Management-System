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

Route::get('/', 'PagesController@welcome');
Route::get('/welcome', 'PagesController@welcome');
Route::get('/showtables', 'PagesController@showtables');
Route::get('/contact', 'PagesController@contact');
Route::get('/index',  'PagesController@index');
Route::get('/insert',  'PagesController@insert');
Route::get('/insertpharmacy',  'PagesController@insertpharmacy');
Route::get('/insertemployee',  'PagesController@insertemployee');
Route::get('/insertdrugmanu',  'PagesController@insertdrugmanu');
Route::get('/insertdrug',  'PagesController@insertdrug');
Route::get('/insertdoctor',  'PagesController@insertdoctor');
Route::get('/insertpatient',  'PagesController@insertpatient');
Route::get('/modifytable',  'PagesController@modifytable');
Route::get('/modifydata',  'PagesController@modifydata');
Route::get('/columndrop', 'PagesController@columndrop');
Route::get('/columnrename', 'PagesController@columnrename');
Route::get('/columnmodify', 'PagesController@columnmodify');
Route::get('/datadelete', 'PagesController@datadelete');
Route::get('/datacupdate', 'PagesController@dataupdate');