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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacts/{id}/{name}', function ($id, $name) {
    return 'My name is ' .$name.' with an id of ' .$id;
});


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'ContactsController@index');
Route::get('/contact', 'ContactsController@contact');

Route::resource('posts', 'PostsController');