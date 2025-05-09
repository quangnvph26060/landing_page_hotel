<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/dich-vu', [HomeController::class, 'service'])->name('service');
Route::get('/tin-tuc', [HomeController::class, 'post'])->name('post');
Route::get('/tin-tuc/{slug?}', [HomeController::class, 'postDetail'])->name('post.detail');
Route::get('dang-nhap', [AuthController::class, 'loginUser'])->name('login');
Route::post('dang-nhap', [AuthController::class, 'authenticateUser'])->name('submit.login');
Route::get('dang-ky-tai-khoan', [AuthController::class, 'registerUser'])->name('register');
Route::post('dang-ky-tai-khoan', [AuthController::class, 'registerUserSubmit'])->name('submit.register');

