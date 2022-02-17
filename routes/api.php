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




//   the following is for Login ,Register , update profile , logout or remote token

// get the user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




