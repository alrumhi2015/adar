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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Users
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/setting', [App\Http\Controllers\HomeController::class, 'setting'])->name('profile.setting');
Route::post('/save/{id}', [App\Http\Controllers\HomeController::class, 'storeProfile'])->name('profile.save');




Route::prefix('student')->group(function(){
    Route::get('/view', [App\Http\Controllers\StudentController::class, 'viewStudent'])->name('view.students');
    Route::get('/add', [App\Http\Controllers\StudentController::class, 'addStudent'])->name('add.student');
    Route::post('/store', [App\Http\Controllers\StudentController::class, 'storeStudent'])->name('students.save');
    Route::get('/edit/{id}', [App\Http\Controllers\StudentController::class, 'editStudent'])->name('edit.student');
    Route::post('/update', [App\Http\Controllers\StudentController::class, 'updateStudent'])->name('update.student');
    Route::get('/delete/{id}', [App\Http\Controllers\StudentController::class, 'deleteStudent'])->name('delete.student');
});





