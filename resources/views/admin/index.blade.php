@extends('layouts.app')

@section('title', 'Статистика сайта')

@section('content')
    <div class="row">
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Аниме</h5>
                    <p class="card-text">{{ $anime_count }}</p>
                    <a href="{{ route('anime.index') }}" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Жанры</h5>
                    <p class="card-text">{{ $category_count }}</p>
                    <a href="{{ route('category.index') }}" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Типы</h5>
                    <p class="card-text">{{ $type_count }}</p>
                    <a href="{{ route('type.index') }}" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Годы</h5>
                    <p class="card-text">{{ $date_count }}</p>
                    <a href="{{ route('date.index') }}" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Слайды</h5>
                    <p class="card-text">{{ $slider_count }}</p>
                    <a href="{{ route('slider.index') }}" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Сезоны</h5>
                    <p class="card-text">{{ $season_count }}</p>
                    <a href="{{ route('season.index') }}" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Епизоды</h5>
                    <p class="card-text">{{ $episode_count }}</p>
                    <a href="{{ route('episode.index') }}" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>
    </div>
@endsection
