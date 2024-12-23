<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KhoaController; 


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

Route::get('/session/get', [SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class,'storeSessionData'])->name('session.set');
Route::get('/session/delete', [SessionController::class,'deleteSessionData'])->name('session.delete');

//lay duong link
Route::get('/user',function(Request $request){
    return  $url = request()->fullUrl();
 });

 Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');

#Khoa

Route::get('/khoa',[KhoaController::class,'index'])->name('khoa.index');

Route::get('/khoa/detail/{makh}',[KhoaController::class,'detail'])->name('khoa.detail');

Route::get('/khoa/create',[KhoaController::class,'create'])->name('khoa.create');
Route::post('/khoa/create', [KhoaController::class, 'createSubmit'])->name('khoa.createSubmit');