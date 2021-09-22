<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['title' => 'Боевые искусства', 'slug' => 'fighting'],
            ['title' => 'Военное', 'slug' => 'military'],
            ['title' => 'Игры', 'slug' => 'game'],
            ['title' => 'Космос', 'slug' => 'space'],
            ['title' => 'Меха', 'slug' => 'mecha'],
            ['title' => 'Пародия', 'slug' => 'parody'],
            ['title' => 'Самураи', 'slug' => 'samurai'],
            ['title' => 'Сёнен', 'slug' => 'shonen'],
            ['title' => 'Суперсила', 'slug' => 'superpower'],
            ['title' => 'Школа', 'slug' => 'school'],
            ['title' => 'Вампиры', 'slug' => 'vampire'],
            ['title' => 'Демоны', 'slug' => 'demons'],
            ['title' => 'История', 'slug' => 'historical'],
            ['title' => 'Магия', 'slug' => 'magic'],
            ['title' => 'Музыка', 'slug' => 'music'],
            ['title' => 'Полиция', 'slug' => 'police'],
            ['title' => 'Сёдзё', 'slug' => 'shojo'],
            ['title' => 'Спорт', 'slug' => 'sport'],
            ['title' => 'Ужасы', 'slug' => 'horror'],
            ['title' => '3D', 'slug' => '3d'],
        ]);
    }
}
