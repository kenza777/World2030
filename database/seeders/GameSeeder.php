<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run()
    {
        Game::insert([
            [
                'team_home_id' => 1, // Maroc
                'team_away_id' => 2, // Espagne
                'stadium_id' => 1,   // Casablanca
                'match_date' => '2030-06-10',
                'match_time' => '18:00:00',
                'status' => 'à venir',
            ],
            [
                'team_home_id' => 3, // Portugal
                'team_away_id' => 4, // Uruguay
                'stadium_id' => 3,   // Lisbonne
                'match_date' => '2030-06-11',
                'match_time' => '21:00:00',
                'status' => 'à venir',
            ],
            [
                'team_home_id' => 5, // Argentine
                'team_away_id' => 6, // Paraguay
                'stadium_id' => 5,   // Buenos Aires
                'match_date' => '2030-06-12',
                'match_time' => '20:00:00',
                'status' => 'à venir',
            ],
        ]);
    }
}
