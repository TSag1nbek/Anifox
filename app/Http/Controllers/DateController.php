<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Date::all();

        return view('admin.date.index', compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.date.create');
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
            'date' => 'required|unique:dates',
        ]);

        $date = new Date([
            'date' => $request->get('date'),
        ]);

        $date->save();

        return redirect('admin/date')->with('success', 'The year created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = Date::find($id);

        return view('admin.date.show', compact('date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $date = Date::find($id);

        return view('admin.date.edit', compact('date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required'
        ]);

        $date = Date::find($id);
        $date->date = $request->get('date');
        $date->save();

        return redirect('admin/date')->with('date', 'Date changed successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $date = Date::find($id);
        $date->products()->detach();
        $date->delete();

        return redirect('admin/date')->with('success', 'Date was deleted');
    }
}
