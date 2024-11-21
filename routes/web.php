<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsistenteRoleController; 
use App\Http\Controllers\AsistenteController; 
use App\Http\Controllers\EventoCorporativoController; 
use App\Http\Controllers\EventoCorporativoTipoController; 
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('asistentes', AsistenteController::class);

Route::resource('asistente-roles', AsistenteRoleController::class);

Route::resource('evento-corporativos', EventoCorporativoController::class);

Route::resource('evento-corporativo-tipos', EventoCorporativoTipoController::class);

//Route::resource('evento-corporativos', function(){
    //return "HOla"; 

//}
//);

