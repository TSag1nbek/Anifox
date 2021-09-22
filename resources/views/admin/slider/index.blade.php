@extends('layouts.app')

@section('title', 'Season Admin')

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <a href="{{ route('slider.create') }}" class="btn btn-success">Create new slider</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Rating</th>
            <th scope="col">Anime</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($sliders as $slider)
            <tr>
                <th scope="row">{{ $slider->id }}</th>
                <td><img src="{{ asset($slider->image) }}" height="100px"></td>
                <td>{{ $slider->rating }}</td>
                <td>
                    @foreach($slider->products as $product)
                        <a href="{{ route('anime.show', $product->id) }}">{{ $product->title }}</a>
                    @endforeach
                </td>
                <td style="text-align: right;">
                    <a href="{{ route('slider.show', $slider) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('slider.edit', $slider) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('slider.destroy', $slider) }}" type="submit" style="display: contents" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
