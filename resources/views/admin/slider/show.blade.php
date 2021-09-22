@extends('layouts.app')

@section('title', 'Showing slide id ' . $slider->id)

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Anime</th>
                    <th scope="col">Image</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $slider->id }}</th>
                    <td>{{ $slider->rating }}</td>
                    <td>
                        @foreach($slider->products as $product)
                            <a href="{{ route('anime.show', $product->id) }}">{{ $product->title }}</a>
                        @endforeach
                    </td>
                    <td>
                        <img width="200px" src="{{ asset($slider->image) }}" alt="">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
