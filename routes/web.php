<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EquiposmedicosController;
use App\Http\Controllers\HojadvidaController;
use App\Http\Controllers\UsersController;


Route::get('/', function(){ 
    return view('/home');
});

//login

Route::get('/register', [RegisterController::class,'show']);

Route::post('/register', [RegisterController::class,'register']);

Route::get('/login', [LoginController::class,'show']);

Route::post('/login', [LoginController::class,'login']);

Route::get('/home', [HomeController::class,'index']);

Route::get('/logout', [LogoutController::class,'logout']);

//Equipos

Route::get('/',[EquiposmedicosController::class,'index'])->name('equiposmedicos.index');

Route::get('/create',[EquiposmedicosController::class,'create'])->name('equiposmedicos.create');

Route::post('/store',[EquiposmedicosController::class,'store'])->name('equiposmedicos.store');

Route::get('/edit/{id}',[EquiposmedicosController::class,'edit'])->name('equiposmedicos.edit');

Route::put('/update/{id}',[EquiposmedicosController::class,'update'])->name('equiposmedicos.update');

Route::get('/show/{id}',[EquiposmedicosController::class,'show'])->name('equiposmedicos.show');

Route::delete('/destroy/{id}',[EquiposmedicosController::class,'destroy'])->name('equiposmedicos.destroy');

//Hoja De Vida

//Route::get('/hindex/{id}',[HojadvidaController::class,'hindex'])->name('hojadvida.hindex');

Route::resource('Hojadvida', App\Http\Controllers\HojadvidaController::class);

Route::resource('Equiposmedicos', App\Http\Controllers\EquiposmedicosController::class);

//Route::get('/hcreate',[HojadvidaController::class,'create'])->name('hojadvida.create');

Route::get('/hvshow/{id}',[HojadvidaController::class,'hvshow'])->name('hojadvida.hvshow');

Route::get('/hvedit/{id}',[HojadvidaController::class,'hvedit'])->name('hojadvida.hvedit');

Route::put('/hvupdate/{id}',[HojadvidaController::class,'hvupdate'])->name('hojadvida.hvupdate');

Route::get('/HVPDF/{id}',[HojadvidaController::class,'HVPDF'])->name('hojadvida.HVPDF');

//Usuarios


Route::get('/Usuarios',[UsersController::class,'usindex'])->name('users.usindex');
Route::get('/uscreate',[UsersController::class,'uscreate'])->name('users.uscreate');
Route::post('/usstore',[UsersController::class,'usstore'])->name('users.usstore');
Route::get('/usedit/{id}',[UsersController::class,'usedit'])->name('users.usedit');
Route::put('/usupdate/{id}',[UsersController::class,'usupdate'])->name('users.usupdate');
Route::get('/usshow/{id}',[UsersController::class,'usshow'])->name('users.usshow');
Route::delete('/usdestroy/{id}',[UsersController::class,'usdestroy'])->name('users.usdestroy');



