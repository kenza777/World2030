<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\TeamSeeder;
use Database\Seeders\StadiumSeeder;
use Database\Seeders\GameSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        TeamSeeder::class,
        StadiumSeeder::class,
        GameSeeder::class,
    ]);

    // Facultatif : créer un utilisateur de test
    \App\Models\User::factory()->create([
        'name' => 'fan',
        'email' => 'maroc@example.com',
    ]);
}

}
