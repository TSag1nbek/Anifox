@extends('layouts.app')

@section('title', 'Creating Anime')

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

            <form method="POST" action="{{ route('anime.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="product-original_title">Original Title</label>
                    <input type="text" name="original_title" class="form-control" id="product-original_title" value="{{ old('original_title') }}">
                </div>
                <div class="form-group">
                    <label for="product-genre">Categories</label>
                    {{ Form::select('category_id[]', $categories, null, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-genre">Types</label>
                    {{ Form::select('type_id[]', $types, null, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-genre">Date of issue</label>
                    {{ Form::select('date_id[]', $dates, 24, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-genre">Seasons</label>
                    {{ Form::select('season_id[]', $seasons, null, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="product-slug" value="{{ old('slug') }}">
                </div>
                <div class="form-group">
                    <label for="product-old">Old or Year</label>
                    <select class="form-control" id="product-old" name="old">
                        <option value="12">12</option>
                        <option value="16" selected>16</option>
                        <option value="18">18</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea name="description" class="form-control" id="product-description" style="height: 200px;"></textarea>
                </div>
                <div class="form-group">
                    <label for="product-is_recommend">Reccomendation</label>
                    <select class="form-control" id="product-is_recommend" name="is_recommend">
                        <option value="0" selected>No</option>
                        <option value="1" >Yes</option>
                    </select>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="rating">Rating</label>
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
                        <input class="form-check-input" type="radio" name="rating" id="rating3" value="3" checked>
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
                        <label>Image Anime</label>
                        {{ Form::file('image', null,['class' => 'form-control upload_image']) }}
                    </div>
                    <div class="form-group">
                        <label>Hide Image Anime</label>
                        {{ Form::file('hide_img', null,['class' => 'form-control upload_image']) }}
                        <div class="col-md-4">
                            <img id="hide_img" style="height: 200px;" src="{{ asset('img/products/no-image.png') }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100">Add Anime</button>
                <br><br>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }

                reader.onload = function(e) {
                    $('#hide_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        // previewing of image before uploading
        $("input[name='image']").change(function() {
            console.log('change');
            readURL(this);
        });

        $("input[name='hide_img']").change(function() {
            console.log('change');
            readURL(this);
        });
    </script>
@endsection
