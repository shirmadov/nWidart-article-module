<?php

use Illuminate\Support\Facades\Route;
use Modules\Article\Http\Controllers\ArticleController;

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

Route::group([], function () {
    Route::resource('article', ArticleController::class)->names('article');
});


Route::get('/test', [ArticleController::class, 'index'])->name("admin.tgs.index");;
Route::post('/{id}/edit', [ArticleController::class, 'update'])->name("admin.tgs.update");
Route::get('/{article}/remove/', [ArticleController::class, 'destroy'])->name("admin.tgs.remove");
Route::get('/{article}/edit/', [ArticleController::class, 'edit'])->name("admin.tgs.show");
Route::get('/{article}/show/', [ArticleController::class, 'show'])->name("admin.tgs.edit");
Route::post('/{article}/accept/', [ArticleController::class, 'accept'])->name("admin.tgs.accept");
Route::post('/delete/articles', [ArticleController::class, 'deleteArticles'])->name("admin.tgs.delete");
