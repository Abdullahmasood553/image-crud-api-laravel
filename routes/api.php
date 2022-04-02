<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('posts', [ImageController::class, 'getPosts']);
Route::post('save_post', [ImageController::class, 'savePost']);
Route::post('update_post/{id}', [ImageController::class, 'updatePost']);
Route::get('delete_post/{id}', [ImageController::class, 'deletePost']);