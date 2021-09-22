<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderAnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_slider')->insert([
            [
                'slider_id'  => 1,
                'anime_id' => 1,
            ],
            [
                'slider_id'  => 2,
                'anime_id' => 17,
            ],
            [
                'slider_id'  => 3,
                'anime_id' => 4,
            ],
            [
                'slider_id'  => 4,
                'anime_id' => 13,
            ],
            [
                'slider_id'  => 5,
                'anime_id' => 3,
            ],
        ]);
    }
}
