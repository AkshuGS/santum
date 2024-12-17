<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CodeCheckController;
use App\Http\Controllers\OnlineAricleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->apiResource('articles', ArticleController::class);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);

Route::post('password/email',  [CodeCheckController::class, 'fogotpassword']);
// Route::post('password/code/check', CodeCheckController::class);
Route::post('password/reset', [CodeCheckController::class , 'resetpassword']);

Route::get('getnews', [ArticleController::class, 'shownews']);

// Route::apiResource('online-articles', OnlineAricleController::class);
Route::get('news', [OnlineAricleController::class, 'index']);
Route::get('storenews', [OnlineAricleController::class, 'storenews']);

// Route::get('/post',function (){
//     return 'API';
// });