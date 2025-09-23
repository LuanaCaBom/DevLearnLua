<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        Obra::create([
            'nomeObra' => 'Carnívoros',
            'artistaObra' => 'Adriana Varejão',
            'tipoObra' => 'Pintura',
            'estiloObra' => 'Barroco',
            'imagemObra' => '...',
            'dataObra' => '2008',

        ],[
            'nomeObra' => 'Celacanto Provoca Maremoto',
            'artistaObra' => 'Adriana Varejão',
            'tipoObra' => 'Pintura',
            'estiloObra' => 'Barroco',
            'imagemObra' => '...',
            'dataObra' => '2004',
        ],[
            'nomeObra' => 'Passarinhos - de Inhotim a Demini',
            'artistaObra' => 'Adriana Varejão',
            'tipoObra' => 'Pintura',
            'estiloObra' => 'Barroco',
            'imagemObra' => '...',
            'dataObra' => '2003',
        ],[
            'nomeObra' => 'Linda do Rosário',
            'artistaObra' => 'Adriana Varejão',
            'tipoObra' => 'escultura',
            'estiloObra' => 'Contemporânea',
            'imagemObra' => '...',
            'dataObra' => '2004',
        ]);
    }
}
