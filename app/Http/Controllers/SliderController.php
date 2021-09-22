<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Image;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Slider::all();
        $anime   = Anime::pluck('title', 'id');

        return view('admin.slider.create', compact('anime'), [
            'sliders' => $sliders
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
        $data =  $request->validate([
            'image'  => 'required|mimes:jpeg,bmp,png',
            'rating' => 'required'
        ]);
        unset($data["category_id"]);
        $model = new Slider();
        if ($request->file('image')) {
            $logo = $request->file('image');
            $filename = random_int(999999999, 999999999).time().".".$logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('image/slides/'.$filename));
            $image2 = '/image/slides/'.$filename;
        }
        $data['image'] = $image2;
        $model = $model->create($data);
        $model->products()->sync($request->anime_id);

        return redirect('admin/slider')->with('success', 'Slider created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        $anime  = Anime::pluck('title', 'id');

        return view('admin.slider.edit', compact('slider'), compact('anime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Slider::find($id);
        $data = $request->all();
        if ($request->file('image'))
        {
            $logo = $request->file('image');
            $filename = random_int(100000000, 999999999).time().".".$logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('image/slides/'.$filename));
            $image2 = '/image/slides/'.$filename;
            $data['image'] = $image2;
        }
        unset($data['anime_id']);
        $model->update($data);
        $model->products()->detach();
        $model->products()->sync($request->anime_id);

        return redirect('/admin/slider')->with('success', 'Slider updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->products()->detach();
        $slider->delete();

        return redirect('/admin/slider')->with('success', 'Slides deleted');
    }
}
