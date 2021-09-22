<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['title' => 'Приключения', 'slug' => 'adventure'],
            ['title' => 'Боевик', 'slug' => 'action'],
            ['title' => 'Комедия', 'slug' => 'comedy'],
            ['title' => 'Повседневность', 'slug' => 'everyday'],
            ['title' => 'Романтика', 'slug' => 'romance'],
            ['title' => 'Драма', 'slug' => 'drama'],
            ['title' => 'Фантастика', 'slug' => 'fantastic'],
            ['title' => 'Фэнтези', 'slug' => 'fantasy'],
            ['title' => 'Мистика', 'slug' => 'mystic'],
            ['title' => 'Детектив', 'slug' => 'detective'],
            ['title' => 'Триллер', 'slug' => 'thriller'],
            ['title' => 'Психология', 'slug' => 'psychology'],
        ]);
    }
}
