<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendaModelo;

class registrarAtividadeController extends Controller
{
    public function index(){
        $dados = agendaModelo::all();// Está trazendo todos os dados da tabela
        return view('paginas.cadastrar')->With('dados', $dados);
    }// Fim do método

    public function store(Request $request){
        $data = $request->input('dataEvento');
        $descricao = $request->input('descricaoTexto');

        $model = newAgendaModelo();
        $model->dataEvento = $data;
        $model->descricao  = $descricao;

        $model->save();//Armazenar no BD
        return redirect('/cadastrar');
    }//Fim do método de cadastro
}// Todas as operações do Banco de Dados
