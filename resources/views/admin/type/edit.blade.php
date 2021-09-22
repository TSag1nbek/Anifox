@extends('layouts.app')

@section('title', 'Edeting ' . $type->id)

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

            <form method="POST" action="{{ route('type.update', $type) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" placeholder="Naruto" value="{{ $type->title }}">
                </div>
                <div class="form-group">
                    <label for="product-slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="product-slug" placeholder="Naruto" value="{{ $type->slug }}">
                </div>
                <button type="submit" class="btn btn-success">Update Type</button>
            </form>
        </div>
    </div>
@endsection
