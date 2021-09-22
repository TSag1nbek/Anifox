<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert([
            [
                'title' => 'Пролог',
                'slug'  => 'prologue'
            ],
            [
                'title' => 'Подземелье',
                'slug'  => 'underworld'
            ],
            [
                'title' => 'Столица',
                'slug'  => 'capital'
            ],
            [
                'title' => 'Глаз белой ночи',
                'slug'  => 'the_eye_of_the_white_night'
            ],
            [
                'title' => 'Подводный храм',
                'slug'  => 'underwater_temple'
            ],
            [
                'title' => 'Ведьмин лес',
                'slug'  => 'witch_forest'
            ],
            [
                'title' => 'Тренировки на источниках',
                'slug'  => 'training_on_the_sources'
            ],
            [
                'title' => 'Королевские рыцари',
                'slug'  => 'royal_knights'
            ],
            [
                'title' => 'Перерождение',
                'slug'  => 'rebirth'
            ],
            [
                'title' => 'Королевство Черв',
                'slug'  => 'kingdom_cherv'
            ],
            [
                'title' => 'Полугодовая тренировка',
                'slug'  => 'semi_annual_workout'
            ],
            [
                'title' => 'Подземелье',
                'slug'  => 'kingdom_peak'
            ],
            [
                'title' => '1 Сезон',
                'slug'  => 'season-1'
            ],
            [
                'title' => '2 Сезон',
                'slug'  => 'season-1'
            ],
            [
                'title' => '1 Сезон',
                'slug'  => 'season-1'
            ],
        ]);
    }
}
