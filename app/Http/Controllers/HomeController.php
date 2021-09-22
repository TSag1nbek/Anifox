<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Date;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Type;
use App\Models\User;
use Auth;
use App\Models\Anime;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $animes   = Anime::where('is_recommend', '1')->paginate(10)->onEachSide(1);
        $count    = Anime::withCount('seasons')->get();
        $sliders  = Slider::all();
        $dates    = Date::latest('created_at')->get();

        return view('home.index', [
            'animes'  => $animes,
            'sliders' => $sliders,
            'dates'   => $dates,
            'count'   => $count
        ]);
    }

    public function popular() {
        $animes  = Anime::orderBy('view_count', 'desc')->paginate(10)->onEachSide(1);
        $sliders = Slider::all();
        $dates   = Date::latest('created_at')->get();

        return view('home.popular', [
            'animes'  => $animes,
            'sliders' => $sliders,
            'dates'   => $dates,
        ]);
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $products = Anime::where('title', 'like', "%$query%")->paginate(12);

        return view('home.anime.search')->with('products', $products);
    }

    public function showAnime($anime) {
        $anime = Anime::where('slug', $anime)->first();
        $anime->increment('view_count');
        $comments = $anime->comments()->where('status', 0)->paginate(10);
        $users = User::get();

        return view('home.anime.show', compact('anime'), [
            'comments' => $comments
        ]);
    }

    public function getProductsByCategory($id) {
        $category = Category::where('slug', $id)->first();

        return view('home.categories.index', [
            'category' => $category
        ]);
    }

    public function getProductsByType($id) {
        $type = Type::where('slug', $id)->first();

        return view('home.types.index', [
            'type' => $type
        ]);
    }

    public function getProductsByDate($id) {
        $date = Date::where('date', $id)->first();

        return view('home.date.index', [
            'date' => $date
        ]);
    }

    public function getAnimeBySeason($anime_slug, $season_id) {
        $season = Season::where('slug', $season_id)->first();

        return view('home.season.index', [
            'season' => $season
        ]);
    }

    public function getEpisodeBySeason($anime_slug, $season_id, $episode_slug) {
        $episode = Episode::where('slug', $episode_slug)->first();

        return view('home.episode.index', ['episode' => $episode]);
    }

    public function profile()
    {
        return view('user.index', array('user' => Auth::user()));
    }

    public function update_avata(Request $request)
    {
        // Handle the user upload of avatars
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(3000, 3000)->save(public_path('/image/avatar/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('home.profile', array('user' => Auth::user()));
    }

    public function addComment(Request $request) {
        $comment = $request->input('comment');
        $product_id = (int)$request->input('product_id');
        $user_id = auth()->user()->id;

        if (is_null($comment)) {
            return redirect()->back()->withSuccess('минимум 3 слов');
        }

        $objComment = new Comment();
        $objComment = $objComment->create([
            'product_id' => $product_id,
            'user_id' => $user_id,
            'comment' => $comment,
        ]);

        if($objComment) {
            return back();
        }

        return back();
    }

    public function getLike($statusId) {
        $status = Anime::findOrFail($statusId);

        if(!$status) redirect()->route('home');

        if(Auth::user()->hasLikedProduct($status)) {
            return redirect()->back();
        }

        $status->likes()->create(['user_id' => Auth::user()->id]);

        return redirect()->back();
    }
}
