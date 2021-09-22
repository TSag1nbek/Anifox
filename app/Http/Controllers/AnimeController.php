<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Date;
use App\Models\Season;
use App\Models\Type;
use Image;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::all();

        return view('admin.anime.index', compact('animes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
        $types      = Type::pluck('title', 'id');
        $dates      = Date::pluck('date', 'id');
        $seasons    = Season::pluck('title', 'id');

        return view('admin.anime.create', [
            'categories' => $categories,
            'types'      => $types,
            'dates'      => $dates,
            'seasons'    => $seasons,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'          => 'required',
            'original_title' => 'required',
            'slug'           => 'required',
            'old'            => 'required',
            'description'    => 'required',
            'is_recommend'   => 'required',
            'rating'         => 'required',
            'image'          => 'required|mimes:jpeg,png,jpg',
            'hide_img'       => 'required|mimes:jpeg,png,jpg',
        ]);
        unset($data["category_id" && "type_id" && 'date_id' && 'season_id']);
        $model = new Anime();
        if ($request->file('image'))
        {
            $logo = $request->file('image');
            $filename = random_int(100000000, 999999999).time().".".$logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('image/products/'.$filename));
            $image2 = '/image/products/'.$filename;
        }
        $data['image'] = $image2;
        if ($request->file('hide_img'))
        {
            $logo2 = $request->file('hide_img');
            $filename2 = random_int(100000000, 999999999).time().".".$logo2->getClientOriginalExtension();
            Image::make($logo2)->save(public_path('image/hide_anime_image/'.$filename2));
            $image3 = '/image/hide_anime_image/'.$filename2;
        }
        $data['hide_img'] = $image3;
        $model = $model->create($data);
        $model->categories()->sync($request->category_id);
        $model->types()->sync($request->type_id);
        $model->dates()->sync($request->date_id);
        $model->seasons()->sync($request->season_id);

        return redirect('admin/anime')->with('success', 'Anime created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anime  $series
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anime = Anime::find($id);

        return view('admin.anime.show', compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anime  $series
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anime = Anime::find($id);
        $categories = Category::pluck('title', 'id');
        $types      = Type::pluck('title', 'id');
        $dates      = Date::pluck('date', 'id');
        $seasons    = Season::pluck('title', 'id');

        return view('admin.anime.edit', compact('anime'), [
            'categories' => $categories,
            'types'      => $types,
            'dates'      => $dates,
            'seasons'    => $seasons,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anime  $series
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Anime::find($id);
        $data = $request->all();
        if ($request->file('image'))
        {
            $logo = $request->file('image');
            $filename = random_int(100000000, 999999999).time().".".$logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('image/products/'.$filename));
            $image2 = '/image/products/'.$filename;
            $data['image'] = $image2;
        }
        if ($request->file('hide_img'))
        {
            $logo2 = $request->file('hide_img');
            $filename2 = random_int(100000000, 999999999).time().".".$logo2->getClientOriginalExtension();
            Image::make($logo2)->save(public_path('image/hide_anime_image/'.$filename2));
            $image3 = '/image/hide_anime_image/'.$filename2;
            $data['hide_img'] = $image3;
        }
        unset($data['category_id']);
        unset($data['type_id']);
        unset($data['date_id']);
        unset($data['season_id']);
        $model->update($data);
        $model->categories()->detach();
        $model->types()->detach();
        $model->dates()->detach();
        $model->seasons()->detach();
        $model->categories()->sync($request->category_id);
        $model->types()->sync($request->type_id);
        $model->dates()->sync($request->date_id);
        $model->seasons()->sync($request->season_id);

        return redirect('admin/anime')->with('success', 'Anime changed successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anime  $series
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anime = Anime::find($id);

        if($anime->comments()->count()) {
            return back()->with('success', 'Cannot delete this anime has comments');
        }

        if($anime->sliders()->count()) {
            return back()->with('success', 'Cannot delete this anime has slides');
        }

        $anime->categories()->detach();
        $anime->seasons()->detach();
        $anime->types()->detach();
        $anime->dates()->detach();
        $anime->seasons()->detach();
        $anime->delete();

        return redirect('admin/anime')->with('success', 'Anime was deleted');
    }
}
