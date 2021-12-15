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
// Auth Link
Route::get('/','\App\Http\Controllers\Controller@index')->name('sign-in');

//Dashboard Link
Route::get('/dashboard','\App\Http\Controllers\DashboardController@index')->name('dashboard');

//Information Links
Route::get('/about-panel', function (){
    return view("information.about");
})->name('about-panel');
Route::get('/teacher-notices', function (){
    return view("information.notices");
})->name('notices');

//Modules Links
Route::get('/teacher', function (){
    return view("modules.teachers");
})->name('teachers');
Route::get('/class', function (){
    return view("modules.class");
})->name('class');
Route::get('/classroom', function (){
    return view("modules.classroom");
})->name('classroom');
Route::get('/timetable', function (){
    return view("modules.timetable");
})->name('timetable');

//System Links
Route::get('/backup', function (){
    return view("system.backup");
})->name('backup');



