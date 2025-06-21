<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ImageSeeder::class,
            VenueSeeder::class,
            ServiceSeeder::class,
            BookSeeder::class,
        ]);
    }
}
