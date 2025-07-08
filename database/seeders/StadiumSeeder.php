<?php

namespace Database\Seeders;

use App\Models\Stadium;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
{
    public function run()
    {
        Stadium::insert([
            ['name' => 'Hassan II Stadium', 'location' => 'Casablanca, Maroc', 'capacity' => 65000, 'image_path' => 'Hassan_II_Stadium.jpg'],
            ['name' => 'Prince Moulay Abdellah Stadium', 'location' => 'Rabat, Maroc', 'capacity' => 53000, 'image_path' => 'moulay2-rabat.webp'],
            ['name' => 'Ibn Batouta Stadium', 'location' => 'Tangier, Maroc', 'capacity' => 45000, 'image_path' => 'ibno-batouta-tanger.jpg'],
            ['name' => 'Marrakesh Stadium', 'location' => 'Marrakesh, Maroc', 'capacity' => 45000, 'image_path' => 'Stade_de_marrakech.jpg'],
            ['name' => 'Fez Stadium', 'location' => 'Fez, Maroc', 'capacity' => 45000, 'image_path' => 'satde-fez.jpg'],
            ['name' => 'Adrar Stadium', 'location' => 'Agadir, Maroc', 'capacity' => 45000, 'image_path' => 'adrar-agadir.jpg'],
        ]);
    }
}
