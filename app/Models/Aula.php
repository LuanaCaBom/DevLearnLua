<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $fillbase = ['nomeAula', 'dataAula', 'descricaoAula', 'statusAula', 'curso_id'];

    public function curso() {
        return $this->belongsTo('App\Models\Curso');
    }

    public function arquivo()
    {
        return $this->hasMany('App\Models\Arquivos', 'aula_id');
    }
}
