<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeSeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anime_season')->insert([
            // ПРОЛОГ
            [
                'anime_id'  => 1,
                'season_id' => 1,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 2,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 3,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 4,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 5,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 6,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 7,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 8,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 9,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 10,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 11,
            ],
            [
                'anime_id'  => 1,
                'season_id' => 12,
            ],
            [
                'anime_id'  => 9,
                'season_id' => 13,
            ],
            [
                'anime_id'  => 9,
                'season_id' => 14,
            ],
            [
                'anime_id'  => 17,
                'season_id' => 15,
            ],
        ]);
    }
}
