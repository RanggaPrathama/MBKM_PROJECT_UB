<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


//AUTH LOGIN REGISTER
Route::get('/login',[UserController::class,'indexlogin'])->name('login');
Route::get('/register',[UserController::class,'indexregister'])->name('register');
Route::post('/register',[UserController::class,'register_post'])->name('register_post');
Route::get('/homepage',[UserController::class,'homepage'])->name('homepage');
