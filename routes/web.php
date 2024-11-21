<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsistenteRoleController; 
use App\Http\Controllers\AsistenteController; 
 

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('asistentes', AsistenteController::class);

Route::resource('asistente-roles', AsistenteRoleController::class);

//Route::resource('evento-corporativos', function(){
    //return "HOla"; 

//}
//);

