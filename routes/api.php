<?php

use Illuminate\Support\Facades\Route;
use Modules\Article\Http\Controllers\ArticleController;
use Modules\Article\Http\Controllers\Api\TgsArticleController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('article', ArticleController::class)->names('article');
});

Route::post('article',[TgsArticleController::class,'store']);
Route::post('test',[TgsArticleController::class,'index']);
