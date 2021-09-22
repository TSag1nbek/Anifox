<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anime_category')->insert([
            [
                'anime_id'    => 1,
                'category_id' => 2,
            ],
            [
                'anime_id'    => 1,
                'category_id' => 3,
            ],
            [
                'anime_id'    => 1,
                'category_id' => 8,
            ],
            [
                'anime_id'    => 1,
                'category_id' => 9,
            ],
            [
                'anime_id'    => 2,
                'category_id' => 1,
            ],
            [
                'anime_id'    => 2,
                'category_id' => 8,
            ],
            [
                'anime_id'    => 3,
                'category_id' => 1,
            ],
            [
                'anime_id'    => 3,
                'category_id' => 2,
            ],
            [
                'anime_id'    => 3,
                'category_id' => 6,
            ],
            [
                'anime_id'    => 3,
                'category_id' => 8,
            ],
            [
                'anime_id'    => 3,
                'category_id' => 11,
            ],
            [
                'anime_id'    => 4,
                'category_id' => 1,
            ],
            [
                'anime_id'    => 4,
                'category_id' => 2,
            ],
            [
                'anime_id'    => 4,
                'category_id' => 7,
            ],
            [
                'anime_id'    => 5,
                'category_id' => 2,
            ],
            [
                'anime_id'    => 5,
                'category_id' => 6,
            ],
            [
                'anime_id'    => 6,
                'category_id' => 3,
            ],
            [
                'anime_id'    => 6,
                'category_id' => 4,
            ],
            [
                'anime_id'    => 6,
                'category_id' => 9,
            ],
            [
                'anime_id'    => 7,
                'category_id' => 3,
            ],
            [
                'anime_id'    => 7,
                'category_id' => 5,
            ],
            [
                'anime_id'    => 8,
                'category_id' => 1,
            ],
            [
                'anime_id'    => 8,
                'category_id' => 5,
            ],
            [
                'anime_id'    => 8,
                'category_id' => 7,
            ],
            [
                'anime_id'    => 9,
                'category_id' => 2,
            ],
            [
                'anime_id'    => 9,
                'category_id' => 3,
            ],
            [
                'anime_id'    => 9,
                'category_id' => 4,
            ],
            [
                'anime_id'    => 9,
                'category_id' => 7,
            ],
            [
                'anime_id'    => 10,
                'category_id' => 1,
            ],
            [
                'anime_id'    => 10,
                'category_id' => 3,
            ],
            [
                'anime_id'    => 10,
                'category_id' => 8,
            ],
            [
                'anime_id'    => 11,
                'category_id' => 1,
            ],
            [
                'anime_id'    => 11,
                'category_id' => 8,
            ],
            [
                'anime_id'    => 12,
                'category_id' => 9,
            ],
            [
                'anime_id'    => 12,
                'category_id' => 10,
            ],
            [
                'anime_id'    => 12,
                'category_id' => 11,
            ],
            [
                'anime_id'    => 12,
                'category_id' => 12,
            ],
            [
                'anime_id'    => 13,
                'category_id' => 1,
            ],
            [
                'anime_id'    => 13,
                'category_id' => 2,
            ],
            [
                'anime_id'    => 13,
                'category_id' => 3,
            ],
            [
                'anime_id'    => 13,
                'category_id' => 6,
            ],
            [
                'anime_id'    => 13,
                'category_id' => 8,
            ],
            [
                'anime_id'    => 14,
                'category_id' => 2,
            ],
            [
                'anime_id'    => 14,
                'category_id' => 9,
            ],
            [
                'anime_id'    => 15,
                'category_id' => 3,
            ],
            [
                'anime_id'    => 15,
                'category_id' => 4,
            ],
            [
                'anime_id'    => 15,
                'category_id' => 5,
            ],
            [
                'anime_id'    => 16,
                'category_id' => 3,
            ],
            [
                'anime_id'    => 16,
                'category_id' => 5,
            ],
            [
                'anime_id'    => 16,
                'category_id' => 8,
            ],
            [
                'anime_id'    => 17,
                'category_id' => 2,
            ],
            [
                'anime_id'    => 17,
                'category_id' => 8,
            ],
            [
                'anime_id'    => 17,
                'category_id' => 9,
            ],
        ]);
    }
}
