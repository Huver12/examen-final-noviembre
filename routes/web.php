<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsistenteController;

use App\Http\Controllers\CatalogoController;

use App\Http\Controllers\EventoCorporativoController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route::resource('evento-corporativos', function(){
    //return "HOla"; 

//}
//);

