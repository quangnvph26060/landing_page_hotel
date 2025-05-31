<?php

use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/categories', [GuideController::class, 'categories'])->name('guide.categories');
    Route::get('/admin/guide/posts', [GuideController::class, 'getPosts'])->name('guide');
    Route::post('/admin/add/categorie', [GuideController::class, 'addCategorie'])->name('add.guide.categories');
    Route::post('/admin/add/post', [GuideController::class, 'addPost'])->name('add.addPost');
    Route::post('/admin/find/post/{id}', [GuideController::class, 'findPost'])->name('findPost');
    Route::delete('/admin/delete/post/{id}', [GuideController::class, 'deletePost'])->name('deletePost');
    Route::delete('/category/{id}', [GuideController::class, 'deleteCategory'])->name('deleteCategory');


    Route::get('/categorie-support', [HomeController::class, 'categorieSupport'])->name('categorie.support');
    Route::get('/support/{slug}', [HomeController::class, 'suportDetail'])->name('support.category');
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
