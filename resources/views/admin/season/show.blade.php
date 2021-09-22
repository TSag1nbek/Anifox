@extends('layouts.app')

@section('title', 'Showing season - ' . $season->id)

@section('content')
    <div class="card">
        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Anime</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{ $season->id }}</th>
                <td>{{ $season->title }}</td>
                <td>{{ $season->slug }}</td>
                <td>
                    @foreach($season->products as $product)
                        <a href="{{ route('anime.show', $product->id) }}">{{ $product->title }}</a>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
