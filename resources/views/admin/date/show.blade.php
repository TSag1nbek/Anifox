@extends('layouts.app')

@section('title', 'Showing date - ' . $date->date)

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Product Count</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $date->id }}</th>
                    <td>{{ $date->date }}</td>
                    <td>{{ $date->products->count() }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
