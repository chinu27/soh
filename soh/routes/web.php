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

Route::get('greeting', function () {
    return view('welcome', ['name' => 'chinu']);
});

Route::get('gamefiles', function()
{
    return View::make('pages.gamefiles');
});
Route::get('members', function()
{
    return View::make('pages.members');
});
Route::get('search', function()
{
    return View::make('pages.search');
});


Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





