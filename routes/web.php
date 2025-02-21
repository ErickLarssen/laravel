<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\registrarAtividadeController;

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});

Route::get('/consultar', function(){
    return view('paginas/consultar');
});

Route::get('/editar', function(){
    return view('paginas/editar');
});

Route::get('/entrar', function () {
    return view('paginas/entrar');  
});

Route::get('/planos', function () {
    return view('paginas/planos');  
});

Route::get('/home', function () {
    return view('paginas/home');  
});

Route::get('/cadastrar/salvar',[App\Http\Controllers\registrarAtividadeController::class, 'store']);

