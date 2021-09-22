<?php

namespace App\Providers;

use App\Models\Anime;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Date;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories     = Category::all();
        $types          = Type::all();
        $dates          = Date::all();
        $searchProducts = Anime::paginate(10);
        $users          = User::get()->take(1);
        $lastComments   = Comment::orderBy('created_at','DESC')->paginate(2);

        View::share([
            'categories'     => $categories,
            'types'          => $types,
            'dates'          => $dates,
            'searchProducts' => $searchProducts,
            'users'          => $users,
            'lastComments'    => $lastComments,
        ]);
    }
}
