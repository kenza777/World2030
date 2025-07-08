<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        Team::create(['name' => 'Maroc', 'country' => 'Maroc', 'coach' => 'Walid Regragui']);
        Team::create(['name' => 'Espagne', 'country' => 'Espagne', 'coach' => 'Luis de la Fuente']);
        Team::create(['name' => 'Brésil', 'country' => 'Brésil', 'coach' => 'Tite']);
        Team::create(['name' => 'Argentine', 'country' => 'Argentine', 'coach' => 'Lionel Scaloni']);
        Team::create(['name' => 'Allemagne', 'country' => 'Allemagne', 'coach' => 'Julian Nagelsmann']);
        Team::create(['name' => 'France', 'country' => 'France', 'coach' => 'Didier Deschamps']);
    }
}
