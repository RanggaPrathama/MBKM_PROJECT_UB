<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//AUTH LOGIN REGISTER
Route::get('/',[UserController::class,'indexlogin'])->name('login');
Route::post('/',[UserController::class,'login_post']);
Route::get('/register',[UserController::class,'indexregister'])->name('register');
Route::post('/register',[UserController::class,'register_post'])->name('register_post');
Route::get('/home',[UserController::class,'homepage'])->name('home');

Route::get('/adminhome',[AdminController::class,'homeAdmin'])->name('homeAdmin');
Route::get('/dataAdmin',[AdminController::class,'dataAdmin'])->name('dataAdmin');
Route::get('/unggahDokumen',[UserController::class,'viewunggahdokumen'])->name('viewunggahdokumen');
Route::get('/lengkapiDokumen',[UserController::class,'lengkapiDokumen'])->name('lengkapidokumen');

Route::put('/unggahDokumen/{id}',[UserController::class,'unggahDokumen'])->name('unggahdokumen');

Route::delete('/user/delete/{id}',[AdminController::class,'destroyUser'])->name('user.destroy');

Route::get('/profil',[UserController::class,'profil'])->name('profil');

Route::get('/itemtersimpan',[UserController::class,'itemtersimpan'])->name('itemtersimpan');

Route::get('/gantikatasandi',[UserController::class,'gantikatasandi'])->name('gantikatasandi');

Route::post('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/programmagang',[UserController::class,'programmagang'])->name('programmagang');

Route::get('/persyaratan',[UserController::class,'persyaratan'])->name('persyaratan');

Route::put('/roleupdate/{id}',[UserController::class,'updaterole'])->name('user.updaterole');
