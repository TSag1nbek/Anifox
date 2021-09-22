@extends('layouts.app')

@section('title', 'Showing type id ' . $type->id)

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Product Count</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $type->id }}</th>
                    <td>{{ $type->title }}</td>
                    <td>{{ $type->slug }}</td>
                    <td>{{ $type->products->count() }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
