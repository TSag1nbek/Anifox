<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'image'  => 'img/slides/1.jpg',
                'rating' => '9.8',
            ],
            [
                'image'  => 'img/slides/2.jpeg',
                'rating' => '7.2',
            ],
            [
                'image'  => 'img/slides/3.jpg',
                'rating' => '8.8',
            ],
            [
                'image'  => 'img/slides/4.jpg',
                'rating' => '5.1',
            ],
            [
                'image'  => 'img/slides/5.jpg',
                'rating' => '8.1',
            ],
        ]);
    }
}
