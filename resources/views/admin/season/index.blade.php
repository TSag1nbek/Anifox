@extends('layouts.app')

@section('title', 'Season Admin')

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <a href="{{ route('season.create') }}" class="btn btn-success">Add new season</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Anime</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($seasons as $season)
            <tr>
                <th scope="row">{{ $season->id }}</th>
                <td>{{ $season->title }}</td>
                <td>{{ $season->slug }}</td>
                <td>
                    @foreach($season->products as $product)
                        <a href="{{ route('anime.show', $product->id) }}">{{ $product->title }}</a>
                    @endforeach
                </td>
                <td style="text-align: right;">
                    <a href="{{ route('season.show', $season) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('season.edit', $season) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('season.destroy', $season) }}" type="submit" style="display: contents" method="POST">
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
