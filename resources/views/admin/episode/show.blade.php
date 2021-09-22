@extends('layouts.app')

@section('title', 'Showing episode - ' . $episode->id)

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Seasons</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $episode->id }}</th>
                    <td>{{ $episode->title }}</td>
                    <td>{{ $episode->slug }}</td>
                    <td>
                        @foreach($episode->seasons as $season)
                            <a href="{{ route('season.show', $season->id) }}">{{ $season->title }}</a>
                        @endforeach
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $episode->description }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
