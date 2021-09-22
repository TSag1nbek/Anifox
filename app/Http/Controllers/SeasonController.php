<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = Season::all();

        return view('admin.season.index', compact('seasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.season.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug'  => 'required',
        ]);

        $season = new Season([
            'title' => $request->get('title'),
            'slug'  => $request->get('slug'),
        ]);

        $season->save();

        return redirect('admin/season')->with('success', 'Season created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $season = Season::find($id);

        return view('admin.season.show', compact('season'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $season = Season::find($id);

        return view('admin.season.edit', compact('season'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug'  => 'required'
        ]);

        $season = Season::find($id);
        $season->title = $request->get('title');
        $season->slug  = $request->get('slug');
        $season->save();

        return redirect('admin/season')->with('success', 'Season changed successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = Season::find($id);
        $season->products()->detach();
        $season->episodes()->detach();
        $season->delete();

        return redirect('admin/season')->with('success', 'Episode was deleted');
    }
}
