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

Route::get('/','Controller1@home');
Route::get('/menu','Controller1@menu');
Route::get('/page1','Controller1@page1');
Route::get('/page2','Controller1@page2');

Route::get('/page3','Controller1@page3');
Route::post('/page3','Controller1@page3');

Route::get('/page4','Controller1@page4');

Route::get('/page5','Controller1@page5');
Route::post('/page5','Controller1@page5');

Route::get('/first','Controller1@first');

Route::get('/second','Controller1@second');
Route::post('/second','Controller1@second');

Route::get('/third','Controller1@third');
Route::post('/third','Controller1@third');

Route::get('/child1','Controller1@child1');
Route::get('/child2','Controller1@child2');

Route::get('/child3','Controller1@child3');
Route::post('/child3','Controller1@child3');

Route::get('/child4','Controller1@child4');
Route::get('/child5','Controller1@child5');

Route::get('/register','Controller1@register');

Route::get('/registersummary','Controller1@registersummary');
Route::post('/registersummary','Controller1@registersummary');

Route::get('/upload','Controller1@upload');
Route::post('/uploadprocess','Controller1@uploadprocess');

Route::get('/viewall','dbmsController@viewall');

Route::get('/search','dbmsController@searchdb');
Route::post('/searchresult','dbmsController@searchresult');

Route::get('/insert','dbmsController@insertrecord');
Route::post('/insertprocess','dbmsController@insertprocess');

Route::get('/delete','dbmsController@deleterecord');
Route::post('/deleteprocess','dbmsController@deleteprocess');

Route::get('/deletequick/{id}','dbmsController@deletequick');
Route::get('/updatequick/{id}','dbmsController@updatequick');

Route::get('/update','dbmsController@updaterecord');
Route::post('/updatedisplay','dbmsController@updatedisplay');
Route::post('/updateprocess','dbmsController@updateprocess');

Route::get('/login','dbmsController@login');
Route::post('/loginprocess','dbmsController@loginprocess');

Route::get('/logout','dbmsController@logout');

Route::get('/testview','dbmsController@testview');
Route::get('/testinsert','dbmsController@testinsert');
Route::get('/testdecrypt','dbmsController@testdecrypt');
Route::get('/testupdate','dbmsController@testupdate');
Route::get('/testdelete','dbmsController@testdelete');

Route::get('/eloqview','eloq@viewall');
Route::get('/eloqinsert','eloq@insert');
Route::get('/eloqupdate','eloq@update');
Route::get('/eloqdelete','eloq@delete');
Route::get('/create','eloq@createfile');
Route::get('/write','eloq@write');
Route::get('/read','eloq@read');
Route::get('/filesize','eloq@getsize');
Route::get('/deletefile','eloq@deletefile');
Route::get('/makefolder','eloq@createfolder');
Route::get('/deletefolder','eloq@deletefolder');