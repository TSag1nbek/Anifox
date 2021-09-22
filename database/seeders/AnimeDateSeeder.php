<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anime_date')->insert([
            [
                'date_id'  => 20,
                'anime_id' => 1,
            ],
            [
                'date_id'  => 19,
                'anime_id' => 2,
            ],
            [
                'date_id'  => 20,
                'anime_id' => 2,
            ],
            [
                'date_id'  => 21,
                'anime_id' => 2,
            ],
            [
                'date_id'  => 23,
                'anime_id' => 2,
            ],
            [
                'date_id'  => 24,
                'anime_id' => 2,
            ],
            [
                'date_id'  => 16,
                'anime_id' => 3,
            ],
            [
                'date_id'  => 20,
                'anime_id' => 3,
            ],
            [
                'date_id'  => 21,
                'anime_id' => 3,
            ],
            [
                'date_id'  => 23,
                'anime_id' => 3,
            ],
            [
                'date_id'  => 19,
                'anime_id' => 4,
            ],
            [
                'date_id'  => 20,
                'anime_id' => 4,
            ],
            [
                'date_id'  => 21,
                'anime_id' => 4,
            ],
            [
                'date_id'  => 22,
                'anime_id' => 4,
            ],
            [
                'date_id'  => 24,
                'anime_id' => 4,
            ],
            [
                'date_id'  => 24,
                'anime_id' => 5,
            ],
            [
                'date_id'  => 19,
                'anime_id' => 6,
            ],
            [
                'date_id'  => 21,
                'anime_id' => 6,
            ],
            [
                'date_id'  => 22,
                'anime_id' => 6,
            ],
            [
                'date_id'  => 20,
                'anime_id' => 7,
            ],
            [
                'date_id'  => 20,
                'anime_id' => 8,
            ],
            [
                'date_id'  => 21,
                'anime_id' => 8,
            ],
            [
                'date_id'  => 22,
                'anime_id' => 8,
            ],
            [
                'date_id'  => 23,
                'anime_id' => 8,
            ],
            [
                'date_id'  => 18,
                'anime_id' => 9,
            ],
            [
                'date_id'  => 22,
                'anime_id' => 9,
            ],
            [
                'date_id'  => 5,
                'anime_id' => 10,
            ],
            [
                'date_id'  => 21,
                'anime_id' => 11,
            ],
            [
                'date_id'  => 24,
                'anime_id' => 11,
            ],
            [
                'date_id'  => 9,
                'anime_id' => 12,
            ],
            [
                'date_id'  => 14,
                'anime_id' => 13,
            ],
            [
                'date_id'  => 20,
                'anime_id' => 13,
            ],
            [
                'date_id'  => 23,
                'anime_id' => 14,
            ],
            [
                'date_id'  => 24,
                'anime_id' => 15,
            ],
            [
                'date_id'  => 21,
                'anime_id' => 16,
            ],
            [
                'date_id'  => 22,
                'anime_id' => 16,
            ],
            [
                'date_id'  => 23,
                'anime_id' => 16,
            ],
            [
                'date_id'  => 24,
                'anime_id' => 16,
            ],
            [
                'date_id'  => 22,
                'anime_id' => 17,
            ],
        ]);
    }
}
