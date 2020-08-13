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

Route::get('/', 'HomeController@index')->middleware(['auth', 'admin'])->name('home');

Route::get('/student', 'StudentController@index')->middleware(['auth', 'admin'])->name('student');
Route::get('/student/create', 'StudentController@create')->middleware(['auth', 'admin'])->name('student_create');
Route::post('/student', 'StudentController@store');
Route::delete('/student/{id}', 'StudentController@destroy');
Route::get('/student/{id}/edit', 'StudentController@edit');
Route::patch('/student/{student}', 'StudentController@update');

Route::get('/teacher', 'TeacherController@index');
Route::get('/baak', 'BaakController@index');
Route::get('/user', 'UserController@index');
Route::get('/profil', 'ProfilController@index')->name('profil');

Route::get('/hallo', function () {
    return 'Hello World!';
});

Auth::routes();
