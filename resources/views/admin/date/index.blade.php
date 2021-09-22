@extends('layouts.app')

@section('title', 'Date Admin')

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <a href="{{ route('date.create') }}" class="btn btn-success">Create new date</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Year</th>
            <th scope="col">Anime Count</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($dates as $date)
            <tr>
                <th scope="row">{{ $date->id }}</th>
                <td>{{ $date->date }}</td>
                <td>{{ $date->products->count() }}</td>
                <td style="text-align: right;">
                    <a href="{{ route('date.show', $date) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('date.edit', $date) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('date.destroy', $date) }}" type="submit" style="display: contents" method="POST">
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
