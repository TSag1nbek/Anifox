<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = Episode::all();

        return view('admin.episode.index', compact('episodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seasons = Season::pluck('title', 'id');

        return view('admin.episode.create', [
            'seasons' => $seasons
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
            'title'       => 'required',
            'slug'        => 'required',
            'description' => 'required',
            'video_code'  => 'required',
        ]);
        unset($data['season_id']);
        $model = new Episode();
        $model = $model->create($data);
        $model->seasons()->sync($request->season_id);

        return redirect('admin/episode')->with('success', 'Episode created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Episode  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $episode = Episode::find($id);

        return view('admin.episode.show', compact('episode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Episode  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Episode::find($id);
        $seasons = Season::pluck('title', 'id');

        return view('admin.episode.edit', compact('product'), [
            'seasons' => $seasons
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Episode  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Episode::find($id);
        $data = $request->all();
        unset($data['season_id']);
        $model->update($data);
        $model->seasons()->detach();
        $model->seasons()->sync($request->season_id);

        return redirect('admin/episode')->with('success', 'Episode changed successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Episode  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Episode::find($id);
        $product->seasons()->detach();
        $product->delete();

        return redirect('admin/episode')->with('success', 'Episode was deleted');
    }
}
