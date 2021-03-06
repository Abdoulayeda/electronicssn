<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'nom' => 'Portable'
            ]);

        Categorie::create([
            'nom' => 'Ordinateur'
            ]);

            Categorie::create([
            'nom' => 'Ecouteur Bluetooth'
            ]);


            Categorie::create([
            'nom' => 'Téléviseur'
            ]);
    }
}
