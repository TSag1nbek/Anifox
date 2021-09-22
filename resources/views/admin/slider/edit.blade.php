@extends('layouts.app')

@section('title', 'Edeting ' . $slider->id)

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

            <form method="POST" action="{{ route('slider.update', $slider) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="slider-id">ID</label>
                    <input type="text" name="id" class="form-control" id="slider-id" value="{{ $slider->id }}">
                </div>
                <div class="form-group">
                    <label for="slider-product">Anime</label>
                    {{ Form::select('anime_id[]', $anime, $slider->products, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="product-rating">Example select</label>
                        <select class="form-control" id="product-rating" name="rating">
                            <option value="{{ $slider->rating }}" selected>{{ $slider->rating }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    {{ Form::file('image', null,['class' => 'form-control upload_image']) }}
                    <div class="col-md-4">
                        <img id="image" style="width: 100px;" src="{{ asset("$slider->image") }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update Product</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function readURLActors(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        // previewing of image before uploading
        $("input[name='image']").change(function() {
            console.log('change');
            readURLActors(this);
        });
    </script>
@endsection
