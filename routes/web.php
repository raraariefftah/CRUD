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

//use Illuminate\Routing\Route;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'HomeController@index');

Route::post('/login', 'HomeController@login');

Route::get('/master', function() {
    return view('adminlte.master');
} ) ;

Route::get('/items', function() {
    return view('items.index');
});

Route::get('/items/create', function() {
    return view('items.create');
});

Route::get('/', function () {
    return view('items.index');
});

Route::get('/data-tables', function () {
    return view('items.data-tables');
});

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts', 'PostController@index');

Route::get('/posts/{id}', 'PostController@show');

Route::get('/posts/{id}/edit', 'PostController@edit');

Route::put('/posts/{id}', 'PostController@update');

Route::delete('/posts/{id}', 'PostController@destroy');

//=============================================================
Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/pertanyaan/{id}', 'PertanyaanController@show');

Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');

Route::put('/pertanyaan/{id}', 'PertanyaanController@update');

Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');