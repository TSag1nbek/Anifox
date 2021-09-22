<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
// Recommend Animes
Route::get('/popular/', [HomeController::class, 'popular'])->name('home.popular');
// Search Anime
Route::get('/anime/search', [HomeController::class, 'search'])->name('search');

/**
    Register and Login in
 */
Route::get('/signup', [AuthController::class, 'getSignup'])->middleware('guest')->name('auth.signup');
Route::post('/signup', [AuthController::class,'postSignup'])->middleware('guest');

Route::get('/signin', [AuthController::class, 'getSignin'])->middleware('guest')->name('auth.signin');
Route::post('/signin', [AuthController::class, 'postSignin'])->middleware('guest');

Route::get('/signout', [AuthController::class, 'getSignout'])->name('auth.signout');

// Profile
Route::get('profile', [HomeController::class, 'profile'])->middleware('auth')->name('profile');
Route::post('profile', [HomeController::class, 'update_avata']);

// ADMIN PANEL
Route::group([
    'middleware' => 'auth',
], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        // Search Anime Admin
        Route::get('/admin/anime/search', [AdminController::class, 'searchAnime'])->name('searchAnime');
        // DropDown Search Anime IsRecommendation
        Route::get('/admin/anime/recommend/', [AdminController::class, 'isRecommend'])->name('adminAnimeIsRecommend');
        // CRUD Anime Admin
        Route::resource('admin/anime', AnimeController::class);

        Route::get('admin/statistic', [AdminController::class, 'index'])->name('admin.stata');
        Route::resource('admin/episode', EpisodeController::class);
        Route::resource('admin/category', CategoryController::class);
        Route::resource('admin/season', SeasonController::class);
        Route::resource('admin/slider', SliderController::class);
        Route::resource('admin/date', DateController::class);
        Route::resource('admin/type', TypeController::class);
    });
});

// Show anime
Route::get('/anime/{anime}', [HomeController::class, 'showAnime'])->name('animeShow');
// Add Comment
Route::post('/comments/add', [HomeController::class, 'addComment'])->name('comments.add');
// Get Like
Route::get('anime/{statusId}/like', [HomeController::class, 'getLike'])->middleware('auth')->name('episode.like');
// Season
Route::get('anime/{anime}/{season_id}/', [HomeController::class, 'getAnimeBySeason'])->name('showSeason');
// Category
Route::get('/category/{id}', [HomeController::class, 'getProductsByCategory'])->name('showCategory');
// Type
Route::get('/type/{id}', [HomeController::class, 'getProductsByType'])->name('showType');
// Date
Route::get('/date/{id}', [HomeController::class, 'getProductsByDate'])->name('showDate');
// Episodes
Route::get('/anime/{anime}/{season_id}/{episode_slug}/', [HomeController::class, 'getEpisodeBySeason'])->name('showEpisode');
