<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::truncate();

        $now = now();

        $images = [
            [
                'path'       => 'images/wedding1.jpg',
                'type'       => 'book',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'path'       => 'images/wedding2.jpg',
                'type'       => 'service',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'path'       => 'images/wedding3.jpg',
                'type'       => 'book',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'path'       => 'images/wedding4.jpg',
                'type'       => 'service',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'path'       => 'images/wedding5.jpg',
                'type'       => 'book',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'path'       => 'images/wedding6.jpg',
                'type'       => 'service',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Image::insert($images);
    }
}
