<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillbase = ['nomeCurso', 'cargaHoraria', 'descricao', 'valor', 'recomendacoes', 'user_id'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function aula()
    {
        return $this->hasMany('App\Models\Aula', 'curso_id');
    }
}
