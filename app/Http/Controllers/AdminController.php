<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Category;
use App\Models\Date;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Slider;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $anime_count    = Anime::all()->count();
        $category_count = Category::all()->count();
        $slider_count   = Slider::all()->count();
        $date_count     = Date::all()->count();
        $type_count     = Type::all()->count();
        $season_count   = Season::all()->count();
        $episode_count  = Episode::all()->count();

        return view('admin.index', [
            'anime_count'    => $anime_count,
            'category_count' => $category_count,
            'slider_count'   => $slider_count,
            'date_count'     => $date_count,
            'type_count'     => $type_count,
            'season_count'   => $season_count,
            'episode_count'  => $episode_count,
        ]);
    }

    // Admin Anime Shearch
    public function searchAnime(Request $request) {
        $query = $request->input('query');
        $animes = Anime::where('title', 'like', "%$query%")->paginate(15);

        return view('admin.anime.search')->with('animes', $animes);
    }

    // Admin Anime Shearch with dropdown is_reccommendation
    public function isRecommend() {
        $animes = Anime::where('is_recommend', 1)->paginate(10);

        return view('admin.anime.recommend', [
            'animes' => $animes
        ]);
    }
}
