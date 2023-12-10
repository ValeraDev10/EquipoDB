<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EquiposmedicosController;


Route::get('/', function(){ 
    return view('/home');
});

Route::get('/register', [RegisterController::class,'show']);

Route::post('/register', [RegisterController::class,'register']);

Route::get('/login', [LoginController::class,'show']);

Route::post('/login', [LoginController::class,'login']);

Route::get('/home', [HomeController::class,'index']);

Route::get('/logout', [LogoutController::class,'logout']);


Route::get('/',[EquiposmedicosController::class,'index'])->name('equiposmedicos.index');

Route::get('/create',[EquiposmedicosController::class,'create'])->name('equiposmedicos.create');

Route::post('/store',[EquiposmedicosController::class,'store'])->name('equiposmedicos.store');

Route::get('/edit/{id}',[EquiposmedicosController::class,'edit'])->name('equiposmedicos.edit');

Route::put('/update/{id}',[EquiposmedicosController::class,'update'])->name('equiposmedicos.update');

Route::get('/show/{id}',[EquiposmedicosController::class,'show'])->name('equiposmedicos.show');

Route::delete('/destroy/{id}',[EquiposmedicosController::class,'destroy'])->name('equiposmedicos.destroy');



