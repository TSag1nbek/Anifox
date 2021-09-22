@extends('layouts.app')

@section('title', 'Types Admin')

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <a href="{{ route('type.create') }}" class="btn btn-success">Create new type</a>

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
        @foreach($types as $type)
            <tr>
                <th scope="row">{{ $type->id }}</th>
                <td>{{ $type->title }}</td>
                <td>{{ $type->slug }}</td>
                <td>{{ $type->products->count() }}</td>
                <td style="text-align: right;">
                    <a href="{{ route('type.show', $type) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('type.edit', $type) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('type.destroy', $type) }}" type="submit" style="display: contents" method="POST">
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
