<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PagesController@home' );
Route::get('/about', 'App\Http\Controllers\PagesController@about');


//route mahasisawa
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

//route student
// Route::get('/students', 'App\Http\Controllers\StudentController@index');
// Route::get('/students/create', 'App\Http\Controllers\StudentController@create');
// Route::get('/students/{student}', 'App\Http\Controllers\StudentController@show');
// Route::post('/students', 'App\Http\Controllers\StudentController@store');
// Route::delete('/students/{student}', 'App\Http\Controllers\StudentController@destroy');
// Route::get('/students/{student}/edit', 'App\Http\Controllers\StudentController@edit');
// Route::patch('/students/{student}', 'App\Http\Controllers\StudentController@update');

Route::resource('students', 'App\Http\Controllers\StudentController');


