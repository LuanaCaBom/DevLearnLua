<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arquivos extends Model
{
    protected $fillbase = ['arquivo', 'tituloArq', 'descricaoArq', 'dataArq', 'tipoArq', 'aula_id'];

    public function aula() {
        return $this->belongsTo('App\Models\Aula');
    }
}