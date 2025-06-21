<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'name' => 'The Great Gatsby',
            'author_name' => 'F. Scott Fitzgerald',
            'image_id' => 1,
        ]);

        Book::create([
            'name' => 'To Kill a Mockingbird',
            'author_name' => 'Harper Lee',
            'image_id' => 2,
        ]);

        Book::create([
            'name' => '1984',
            'author_name' => 'George Orwell',
            'image_id' => 3,
        ]);
    }
}
