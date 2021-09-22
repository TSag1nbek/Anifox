@extends('layouts.app')

@section('title', 'Edeting ' . $product->title)

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

            <form method="POST" action="{{ route('episode.update', $product) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="product-genre">Seasons</label>
                    {{ Form::select('season_id[]', $seasons, $product->seasons, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
                </div>
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" placeholder="Naruto" value="{{ $product->title }}">
                </div>
                <div class="form-group">
                    <label for="product-slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="product-slug" value="{{ $product->slug }}">
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea name="description" class="form-control" id="product-description" rows="3">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="product-video_code">Video Code</label>
                    <input type="text" name="video_code" class="form-control" id="product-video_code" value="{{ $product->video_code }}">
                </div>
                <button type="submit" class="btn btn-success">Update Episode</button>
            </form>
        </div>
    </div>
@endsection
