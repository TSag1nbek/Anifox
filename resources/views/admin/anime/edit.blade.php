@extends('layouts.app')

@section('title', 'Edeting ' . $anime->title)

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('anime.update', $anime) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" value="{{ $anime->title }}">
                </div>
                <div class="form-group">
                    <label for="product-original_title">Original Title</label>
                    <input type="text" name="original_title" class="form-control" id="product-title" value="{{ $anime->original_title }}">
                </div>
                <div class="form-group">
                    <label for="product-genre">Categories</label>
                    {{ Form::select('category_id[]', $categories, $anime->categories, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-genre">Types</label>
                    {{ Form::select('type_id[]', $types, $anime->types, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-genre">Date of issue</label>
                    {{ Form::select('date_id[]', $dates, $anime->dates, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-genre">Seasons</label>
                    {{ Form::select('season_id[]', $seasons, $anime->seasons, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="product-slug" value="{{ $anime->slug }}">
                </div>
                <div class="form-group">
                    <label for="product-quality">Old or Year</label>
                    <select class="form-control" id="product-quality" name="old">
                        <option value="{{ $anime->old }}">{{ $anime->old }}</option>
                        <option value="12">12</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea name="description" class="form-control" id="product-description" style="height: 200px;">{{ $anime->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="product-is_recommend">Reccomendation</label>
                    <select class="form-control" id="product-is_recommend" name="is_recommend">
                        @if($anime->is_recommend == 1)
                            <option value="{{ $anime->is_recommend }}">Да</option>
                        @else
                            <option value="{{ $anime->is_recommend }}">Нет</option>
                        @endif
                        <option value="0">Нет</option>
                        <option value="1">Да</option>
                    </select>
                </div>

                <div class="form-group mt-3 mb-3">
                    <label for="rating">Rating | Checked {{ $anime->rating }}</label>
                    <br>
                    <div class="form-check form-check-inline" id="rating">
                        <input class="form-check-input" type="radio" name="rating" id="rating1" value="1">
                        <label class="form-check-label" for="rating1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="rating2" value="2">
                        <label class="form-check-label" for="rating2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="rating3" value="3">
                        <label class="form-check-label" for="rating3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="rating4" value="4">
                        <label class="form-check-label" for="rating4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="rating5" value="5">
                        <label class="form-check-label" for="rating5">5</label>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label>Image</label>
                        {{ Form::file('image', null,['class' => 'form-control upload_image']) }}
                        <div class="col-md-4">
                            @if(is_null($anime->image))
                                <img src="{{ asset('img/products/no-image.png') }}" class="w-25">
                            @else
                                <img id="holder" style="height: 100px;" src="{{ asset($anime->image) }}">
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Anime Hide Image</label>
                        {{ Form::file('hide_img', null,['class' => 'form-control upload_image']) }}
                        <div class="col-md-4">
                            @if(is_null($anime->hide_img))
                                <img src="{{ asset('img/products/no-image.png') }}" class="w-25">
                            @else
                                <img id="holder" style="height: 100px;" src="{{ asset($anime->hide_img) }}">
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update Product</button>
            </form>
        </div>
    </div>
@endsection
