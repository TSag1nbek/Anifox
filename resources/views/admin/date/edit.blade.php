@extends('layouts.app')

@section('title', 'Edeting ' . $date->date)

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

            <form method="POST" action="{{ route('date.update', $date) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="product-title">Date</label>
                    <input type="text" name="date" class="form-control" id="product-title" placeholder="Naruto" value="{{ $date->date }}">
                </div>
                <button type="submit" class="btn btn-success">Update Date</button>
            </form>
        </div>
    </div>
@endsection
