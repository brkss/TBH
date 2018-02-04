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
    return view('info');
});

Auth::routes();

Route::get('/messages', 'HomeController@index')->name('messages');
Route::get('/user/{username}', 'PublicController@sendmessage')->name('sendmessage');
Route::post('/messagesend/{id}','PublicController@postmessage');

Route::get('/delete/msg/{message}','HomeController@deletemsg');
Route::get('/profilesitting','HomeController@profilesitting');

Route::post('/savesitting/{user}','HomeController@savesitting');

Route::post('/like','HomeController@like')->name('like');