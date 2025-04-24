<?php

use App\Http\Controllers\ControllerUsuario;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Main/Home');
});

// Registrar todos los controladores de usuario
Route::controller(ControllerUsuario::class)->group(function(){
    // ------------------------------------------- pendiente arreglar CSRF ------------------------------------------
    Route::post('/registro','store'); // Registro de usuario
    Route::get('/test','index'); 
});


