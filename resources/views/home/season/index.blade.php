@extends('layouts.main')

@section('title', ' ANIFOX.RU')

@section('content')
    <!-- Episode Show -->
    <div class="product-show">
        <div class="show__product-container">

            <div class="product__inner container">
                <div class="product__navs">
                    @foreach($season->products as $product)
                    <img src="{{ asset($product->image) }}" class="product__img">
                    @endforeach
                </div>

                <div class="product__body">
                    <div class="product__body-container">

                        <div class="product__container-head">
                            @foreach($season->products as $product)
                            <img src="{{ asset($product->image) }}" alt="" class="product__img-mobile">
                            @endforeach
                        </div>

                        <div class="product__container-body">
                            <div class="product__body-inner">
                                @foreach($season->products as $product)
                                <h1 class="product-title">{{ $product->title }} - {{ $season->title }}</h1>
                                @endforeach
                            </div>

                            <div class="product__body-inner">
                                <ul class="product__menu">
                                    <li>
                                        Оригинальное название:
                                        {{ $product->original_title }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="product__season-series">
                        @foreach($season->episodes as $episode)
                            <a href="{{ route('showEpisode', ['anifox', $season->slug, $episode->slug]) }}" class="product__season-link">{{ $episode->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
