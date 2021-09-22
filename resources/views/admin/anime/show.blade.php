@extends('layouts.app')

@section('title', 'Showing category id ' . $anime->id)

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Types</th>
                    <th scope="col">Year</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $anime->id }}</th>
                        <th><img src="{{ asset($anime->image) }}" height="200px"></th>
                        <td>{{ $anime->title }}</td>
                        <td>
                            @foreach($anime->categories as $category)
                                <a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
                            @endforeach
                        </td>
                        <td>
                            @foreach($anime->types as $type)
                                <a href="{{ route('type.show', $type->id) }}">{{ $type->title }}</a>
                            @endforeach
                        </td>
                        <td>
                            @foreach($anime->dates as $date)
                                <a href="{{ route('date.show', $date->id) }}">{{ $date->date }}</a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Original Title</th>
                    <th scope="col">Likes</th>
                    <th scope="col">View Count</th>
                    <th scope="col">Seasons</th>
                    <th scope="col">Series</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">{{ $anime->old }}</td>
                    <td>{{ $anime->original_title }}</td>
                    <td>{{ $anime->likes->count() }}</td>
                    <td>
                        {{ $anime->view_count }}
                    </td>
                    <td>
                        @foreach($anime->seasons as $season)
                            <a href="{{ route('season.show', $season->id) }}">{{ $anime->seasons->count() }}</a>
                        @endforeach
                    </td>
                    <td>
                        @foreach($anime->dates as $date)
                            <a href="{{ route('date.show', $date->id) }}">{{ $date->date }}</a>
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
                    <td scope="row">{{ $anime->description }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
