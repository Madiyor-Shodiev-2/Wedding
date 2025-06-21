<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name'  => 'Live Wedding Band',
            'price' => 2000,
            'type' => 'Music',
            'description' => 'Live band performance for your wedding party.',
            'image_id' => rand(1, 5),
            'venue_id' => rand(1, 5),
            'telephone' => '+1234567891',
        ]);

        Service::create([
            'name' => 'Professional Animator',
            'price' => 1000,
            'type' => 'Animator',
            'description' => 'Fun and engaging animator for your wedding guests.',
            'image_id' => rand(1, 5),
            'venue_id' => rand(1, 5),
            'telephone' => '+1234567892',
        ]);

        Service::create([
            'name' => 'Wedding Organizer',
            'price' => 2500,
            'type' => 'Organizator',
            'description' => 'Full wedding planning and coordination service.',
            'image_id' => rand(1, 5),
            'venue_id' => rand(1, 5),
            'telephone' => '+1234567893',
        ]);

        Service::create([
            'name' => 'Famous Artist Performance',
            'price' => 5000,
            'type' => 'Artist',
            'description' => 'Live performance by a renowned artist at your wedding.',
            'image_id' => rand(1, 5),
            'venue_id' => rand(1, 5),
            'telephone' => '+1234567894',
        ]);
    }
}
