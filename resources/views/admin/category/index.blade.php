@extends('layouts.app')

@section('title', 'Catogory Admin')

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <a href="{{ route('category.create') }}" class="btn btn-success">Create new catogory</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Product Count</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->products->count() }}</td>
                <td style="text-align: right;">
                    <a href="{{ route('category.show', $category) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('category.edit', $category) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('category.destroy', $category) }}" type="submit" style="display: contents" method="POST">
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
