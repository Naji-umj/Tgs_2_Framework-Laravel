<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Ali',  'email' => 'ali@mail.com'],
            ['name' => 'Riri', 'email' => 'riri@mail.com'],
            ['name' => 'Naji', 'email' => 'naji@mail.com'],
            ['name' => 'Mia',  'email' => 'mia@mail.com'],
            ['name' => 'Adji', 'email' => 'adji@mail.com'],
        ]);
    }
}