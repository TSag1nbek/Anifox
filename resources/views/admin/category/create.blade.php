@extends('layouts.app')

@section('title', 'Creating Category')

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

            <form method="POST" action="{{ route('category.store') }}">
                @csrf
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" value="{{ old('title') }}">

                    <div class="form-group">
                        <label for="product-slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="product-slug" value="{{ old('slug') }}">
                    </div>
                <button type="submit" class="btn btn-success">Create Category</button>
            </form>
        </div>
    </div>
@endsection
