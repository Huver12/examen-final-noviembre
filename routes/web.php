<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsisteneRoleController; 


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('asistene-roles', AsisteneRoleController::class);

//Route::resource('evento-corporativos', function(){
    //return "HOla"; 

//}
//);

