@extends('layouts.main')

@section('title', $episode->title . ' ANIFOX.RU')

@section('content')
    <div class="product-show show__product-container">
        <div class="container">
            <h1 class="product-title">
                @foreach($episode->seasons as $season)
                    {{ $season->title }} {{ $episode->title }}
                @endforeach
            </h1>
            <ul class="product__menu">
                <li>
                    {{ $episode->description }}
                </li>
            </ul>

            <iframe class="player" src="{{ $episode->video_code }}" width="607" height="360" frameborder="0" AllowFullScreen allow="autoplay *; fullscreen *"></iframe>

            <div class="global__flex">
                <div></div>
                @foreach($season->products as $product)
                <a href="{{ route('animeShow', $product->slug) }}" class="global__btn">Список серий</a>
                @endforeach
                <div></div>
            </div>
        </div>
    </div>
@endsection
