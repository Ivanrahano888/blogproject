<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [HomeController::class, 'home']);
Route::get('/registration', [CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');

Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/login', [CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');

Route::get('/userdashboard',[CustomAuthController::class,'userdashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);

