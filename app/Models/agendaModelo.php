<?php

namespace App\Models;

use Illuminate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendaModelo extends Model
{
    use HasFactory;//Fatoração - Dvidir
    protected $table = 'registro'; // Nome da tabela do Bando de dados
} // Coloco apenas a tabela do banco de dados
