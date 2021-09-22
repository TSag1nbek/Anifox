<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anime_type')->insert([
            [
                'anime_id' => 1,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 1,
                'type_id'  => 12,
            ],
            [
                'anime_id' => 1,
                'type_id'  => 14,
            ],
            [
                'anime_id' => 2,
                'type_id'  => 10,
            ],
            [
                'anime_id' => 3,
                'type_id'  => 2,
            ],
            [
                'anime_id' => 3,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 3,
                'type_id'  => 9,
            ],
            [
                'anime_id' => 4,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 4,
                'type_id'  => 9,
            ],
            [
                'anime_id' => 4,
                'type_id'  => 10,
            ],
            [
                'anime_id' => 5,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 5,
                'type_id'  => 10,
            ],
            [
                'anime_id' => 6,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 6,
                'type_id'  => 10,
            ],
            [
                'anime_id' => 7,
                'type_id'  => 10,
            ],
            [
                'anime_id' => 8,
                'type_id'  => 1,
            ],
            [
                'anime_id' => 8,
                'type_id'  => 20,
            ],
            [
                'anime_id' => 9,
                'type_id'  => 6,
            ],
            [
                'anime_id' => 9,
                'type_id'  => 9,
            ],
            [
                'anime_id' => 10,
                'type_id'  => 1,
            ],
            [
                'anime_id' => 10,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 11,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 12,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 12,
                'type_id'  => 16,
            ],
            [
                'anime_id' => 13,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 13,
                'type_id'  => 12,
            ],
            [
                'anime_id' => 14,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 14,
                'type_id'  => 10,
            ],
            [
                'anime_id' => 14,
                'type_id'  => 12,
            ],
            [
                'anime_id' => 14,
                'type_id'  => 19,
            ],
            [
                'anime_id' => 15,
                'type_id'  => 10,
            ],
            [
                'anime_id' => 16,
                'type_id'  => 1,
            ],
            [
                'anime_id' => 16,
                'type_id'  => 10,
            ],
            [
                'anime_id' => 16,
                'type_id'  => 20,
            ],
            [
                'anime_id' => 17,
                'type_id'  => 8,
            ],
            [
                'anime_id' => 17,
                'type_id'  => 12,
            ],
            [
                'anime_id' => 17,
                'type_id'  => 13,
            ],
        ]);
    }
}
