<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\registrarAtividadeController;
use Illuminate\Http\Request;

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

Route::get('/sobre', function () {
    return view('paginas/sobre');
})->name('sobre');

Route::get('/contato', function () {
    return view('paginas/contato');
})->name('contato');

Route::get('/mecanica', function () {
    return view('mecanica');
});

Route::get('/idiomas', function () {
    return view('idiomas');
});

Route::get('/bem-estar', function () {
    return view('bem-estar');
});

Route::get('/tecnologia', function () {
    return view('tecnologia');
});

Route::get('/psicologia', function () {
    return view('psicologia');
});

Route::get('/negocios', function () {
    return view('negocios');
});

Route::get('/cadastrar/salvar',[App\Http\Controllers\registrarAtividadeController::class, 'store']);

