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
Route::get('/about-panel', '\App\Http\Controllers\InformationController@about_panel')->name('about-panel')->middleware('auth');
Route::get('/teacher-notices', '\App\Http\Controllers\InformationController@teacher_notices')->name('notices')->middleware('auth');

//Modules Links
Route::get('/teacher', '\App\Http\Controllers\ModulesController@teacher_module')->name('teachers')->middleware('auth');
Route::get('/class', '\App\Http\Controllers\ModulesController@class_module')->name('class')->middleware('auth');
Route::get('/classroom', '\App\Http\Controllers\ModulesController@classroom_module')->name('classroom')->middleware('auth');
Route::get('/timetable', '\App\Http\Controllers\ModulesController@timetable_module')->name('timetable')->middleware('auth');

//System Links
Route::get('/backup', '\App\Http\Controllers\BackupController@index')->name('backup')->middleware('auth');

//Resources Links
Route::get('/version-notes','\App\Http\Controllers\VersionController@index')->name('version-notes')->middleware('auth');

//Backup Links
Route::get('/do-backup', '\App\Http\Controllers\BackupController@backup')->name('do-backup')->middleware('auth');
Route::get('/download-backup', '\App\Http\Controllers\BackupController@download')->name('download-backup')->middleware('auth');
Route::get('/restore-backup', '\App\Http\Controllers\BackupController@restore')->name('restore')->middleware('auth');
Route::get('/delete-backup', '\App\Http\Controllers\BackupController@delete')->name('delete')->middleware('auth');


//POST Links

// Login post
Route::post('/login', '\App\Http\Controllers\Controller@login')->name('login_post');
Route::get('/logout', '\App\Http\Controllers\Controller@logout')->name('logout_post');


//user post
Route::post('/add_user', '\App\Http\Controllers\UserController@store')->name('add_user')->middleware('auth');
Route::post('/delete_user', '\App\Http\Controllers\UserController@delete')->name('delete_user')->middleware('auth');

//Classroom post
Route::post('/add_classroom', '\App\Http\Controllers\ClassroomController@store')->name('create_classroom')->middleware('auth');
Route::post('/delete_classroom', '\App\Http\Controllers\ClassroomController@delete')->name('delete_classroom')->middleware('auth');




