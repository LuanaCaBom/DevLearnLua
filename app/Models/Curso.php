<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillbase = ['nomeCurso', 'cargaHoraria', 'descricao', 'valor', 'recomendacoes', 'arquivos', 'aulas', 'user_id'];
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
