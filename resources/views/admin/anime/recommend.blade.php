@extends('layouts.app')

@section('title', 'Anime Admin')

@section('content')
    <a href="{{ route('anime.create') }}" class="btn btn-success mb-3">Add new anime</a>

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
            <th scope="col">Recommendation</th>
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
                    @if($anime->is_recommend == 1)
                        Да
                    @else
                        Нет
                    @endif
                </td>
                <td style="text-align: right; display: flex">
                    <a href="{{ route('anime.show', $anime) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('anime.edit', $anime) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('anime.destroy', $anime) }}" type="submit" style="display: contents" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        {{$animes->links("pagination::bootstrap-4")}}
        </tbody>
    </table>
@endsection
