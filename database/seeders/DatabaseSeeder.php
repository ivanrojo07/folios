<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PlaceSeeder;
use Database\Seeders\RealFolioSeeder;
use Database\Seeders\EstablishmentSeeder;
use Database\Seeders\EstablishmentPlaceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PlaceSeeder::class,
            EstablishmentSeeder::class,
            EstablishmentPlaceSeeder::class,
            RealFolioSeeder::class,
        ]);
    }
}
