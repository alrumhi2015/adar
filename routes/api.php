<?php

use App\Http\Controllers\api\CategoryApiController;
use App\Mail\RestPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/






//APi for all students
Route::get('/students', [App\Http\Controllers\api\StudentApiController::class,'index']);
Route::post('/students', [App\Http\Controllers\api\StudentApiController::class,'store']);
Route::post('/students/show/{id}', [App\Http\Controllers\api\StudentApiController::class,'show']);
Route::put('/students/update/{skill}', [App\Http\Controllers\api\StudentApiController::class,'update']);
Route::delete('/students/destroy/{skill}', [App\Http\Controllers\api\StudentApiController::class,'destroy']);





