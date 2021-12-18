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
// GET ROUTES

// Login
Route::get('/','\App\Http\Controllers\Controller@index')->name('sign-in');

//Dashboard Link
Route::get('/dashboard','\App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth');

//Information Links
Route::get('/about-panel', '\App\Http\Controllers\InformationController@about_panel')->name('about-panel');
Route::get('/teacher-notices', '\App\Http\Controllers\InformationController@teacher_notices')->name('notices');

//Modules Links
Route::get('/teacher', '\App\Http\Controllers\ModulesController@teacher_module')->name('teachers');
Route::get('/class', '\App\Http\Controllers\ModulesController@class_module')->name('class');
Route::get('/classroom', '\App\Http\Controllers\ModulesController@classroom_module')->name('classroom');
Route::get('/timetable', '\App\Http\Controllers\ModulesController@timetable_module')->name('timetable');

//System Links
Route::get('/backup', '\App\Http\Controllers\BackupController@index')->name('backup');

//Resources Links
Route::get('/version-notes','\App\Http\Controllers\VersionController@index')->name('version-notes');



//POST Links

// Login post
Route::post('/login', '\App\Http\Controllers\Controller@login')->name('login_post');



Route::post('/add_user', '\App\Http\Controllers\UserController@store')->name('add_user');
Route::post('/delete_user', '\App\Http\Controllers\UserController@delete')->name('delete_user');




