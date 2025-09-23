<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillbase = ['nomeCurso, cargaHoraria, descricao, valor, recomendacoes, arquivos, aulas, certificados'];
}
