<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnimesSeeder::class);
        $this->call(SeasonSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(EpisodeSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(DateSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(SliderAnimeSeeder::class);
        $this->call(AnimeCategorySeeder::class);
        $this->call(AnimeDateSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AnimeTypeSeeder::class);
        $this->call(AnimeSeasonSeeder::class);
        $this->call(SeasonProductSeeder::class);
    }
}
