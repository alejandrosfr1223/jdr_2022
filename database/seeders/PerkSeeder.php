<?php

namespace Database\Seeders;

use App\Models\Perk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perk::create([
            'perkname' => 'Gratis',
            'description' => 'null',
            'price' => 'null'
        ]);
        Perk::create([
            'perkname' => 'Perk Inicial',
            'description' => 'Tendrás acceso a libros exclusivos',
            'price' => '25'
        ]);
        Perk::create([
            'perkname' => 'Perk Aprendizaje',
            'description' => 'Tendrás acceso a libros exclusivos y a cursos',
            'price' => '50'
        ]);
        Perk::create([
            'perkname' => 'Perk Investigador',
            'description' => 'Tendrás acceso a libros exclusivos, cursos, y demás contenidos únicos',
            'price' => '100'
        ]);
    }
}
