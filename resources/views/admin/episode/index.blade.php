@extends('layouts.app')

@section('title', 'Episodes Admin')

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <a href="{{ route('episode.create') }}" class="btn btn-success">Add new episode</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Season</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($episodes as $episode)
        <tr>
            <th scope="row">{{ $episode->id }}</th>
            <td>{{ $episode->title }}</td>
            <td>{{ $episode->slug }}</td>
            <td>
                @foreach($episode->seasons as $season)
                    <a href="{{ route('season.show', $season->id) }}">{{ $season->title }}</a>
                @endforeach
            </td>
            <td>
                {{ $episode->description }}
            </td>
            <td style="text-align: right;">
                <a href="{{ route('episode.show', $episode) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                <a href="{{ route('episode.edit', $episode) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                <form action="{{ route('episode.destroy', $episode) }}" type="submit" style="display: contents" method="POST">
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
