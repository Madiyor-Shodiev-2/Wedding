<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venue;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venue::truncate();

        $now = now();
        Venue::insert([
            [
                'venue_name' => 'Тошкент Паласи',
                'address' => 'Тошкент ш., Амир Темур кўчаси, 10',
                'capacity' => 400,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'venue_name' => 'Самарканд Маркази',
                'address' => 'Самарқанд ш., Регистон майдони, 5',
                'capacity' => 350,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'venue_name' => 'Бухоро Саройи',
                'address' => 'Бухоро ш., Навоий кўчаси, 22',
                'capacity' => 250,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'venue_name' => 'Хива Арена',
                'address' => 'Хива ш., Ичан Қалъа кўчаси, 7',
                'capacity' => 200,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'venue_name' => 'Андижон Зали',
                'address' => 'Андижон ш., Бобур кўчаси, 15',
                'capacity' => 300,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'venue_name' => 'Навоий Мажмуаси',
                'address' => 'Навоий ш., Истиқлол кўчаси, 3',
                'capacity' => 280,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
