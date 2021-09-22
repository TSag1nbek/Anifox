@extends('layouts.app')

@section('title', 'Creating Year')

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('date.store') }}">
                @csrf
                <div class="form-group">
                    <label for="product-title">Date</label>
                    <input type="text" name="date" class="form-control" id="product-title" value="{{ old('date') }}">
                </div>
                <button type="submit" class="btn btn-success">Create Date</button>
            </form>
        </div>
    </div>
@endsection
