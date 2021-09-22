@extends('layouts.app')

@section('title', 'Anime Admin')

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="row w-100 col-md-12 d-flex">
        <a href="{{ route('anime.create') }}" class="btn btn-success mb-3">Add new anime</a>

        <div class="dropdown show ml-2">
            <a class="btn btn-secondary dropdown-toggle" href="{{ route('anime.index') }}" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                All
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{ route('anime.index') }}">All</a>
                <a class="dropdown-item" href={{ route('adminAnimeIsRecommend') }}#">Recommendation</a>
            </div>
        </div>
    </div>

    <form method="get" action="{{ route('searchAnime') }}" class="form-inline my-2 my-lg-0 d-flex">
        <input name="query" id="query" value="{{ request()->input('query') }}" class="form-control mr-sm-2 w-50" type="search" placeholder="Наруто" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Categories</th>
            <th scope="col">Types</th>
            <th scope="col">Year</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($animes as $anime)
            <tr>
                <th scope="row">{{ $anime->id }}</th>
                <th><img src="{{ asset($anime->image) }}" height="100px"></th>
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
                <td style="text-align: right; display: flex">
                    <a href="{{ route('anime.show', $anime->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('anime.edit', $anime) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('anime.destroy', $anime) }}" type="submit" style="display: contents" method="POST">
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
