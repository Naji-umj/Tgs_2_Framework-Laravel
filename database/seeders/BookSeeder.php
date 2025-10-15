<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Laravel Dasar',
            'description' => 'Belajar Laravel untuk pemula',
            'price' => 75000,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'React Modern',
            'description' => 'Panduan front-end terkini',
            'price' => 90000,
            'author_id' => 2
        ]);
    }
}