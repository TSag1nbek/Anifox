@extends('layouts.main')

@section('title', $date->date . ' ANIFOX.RU')

@section('content')
    <div class="category__container">
        <div class="main__container">
            <h1 class="category-title">
                {{ $date->date }}
            </h1>
        </div>
    </div>

    <div class="main__container">
        <div class="category__content mt-15">
            @foreach($date->products as $product)
                <div class="content__product">
                    <a href="{{ route('animeShow', $product->slug) }}" class="content__product-img">
                        @if(is_null($product->image))
                            <img src="{{ asset('img/products/no-image.png') }}">
                        @else
                            <img src="{{ asset($product->image) }}">
                        @endif
                        <div class="info">
                            <p style="font-size: 48px"><i class="fas fa-play"></i> </p>
                        </div>
                        <span class="is__new">
                           <i class="fas fa-eye"></i> {{ $product->view_count }}
                        </span>
                    </a>

                    <a href="{{ route('animeShow', $product->slug) }}" class="content__product-name">{{ $product->title }}</a>

                    <ul class="content__product-menu">
                        @foreach($product->categories as $category)
                            <li>
                                <a href="{{ route('showCategory', $category->slug) }}" class="content__product-category">{{ $category->title }}</a> <a href="{{ route('anime.show', $product->slug) }}" class="content__product-category"></a><i class="fas fa-ellipsis-h" style="color: #434859"></i>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Stars -->
                    <ul class="content__product-stars">
                        @if($product->rating === 5)
                            <li class="active">
                                <i class="fas fa-star" title="Плохо - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Нормально - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Средний - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Хорошо - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Супер - Рейтинг Anifox"></i>
                            </li>
                        @elseif($product->rating === 4)
                            <li class="active">
                                <i class="fas fa-star" title="Плохо - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Нормально - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Средний - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Хорошо - Рейтинг Anifox"></i>
                            </li>
                            <li>
                                <i class="fas fa-star" title="Супер - Рейтинг Anifox"></i>
                            </li>
                        @elseif($product->rating === 3)
                            <li class="active">
                                <i class="fas fa-star" title="Плохо - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Нормально - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Средний - Рейтинг Anifox"></i>
                            </li>
                            <li>
                                <i class="fas fa-star" title="Хорошо - Рейтинг Anifox"></i>
                            </li>
                            <li>
                                <i class="fas fa-star" title="Супер - Рейтинг Anifox"></i>
                            </li>
                        @elseif($product->rating === 2)
                            <li class="active">
                                <i class="fas fa-star" title="Плохо - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Нормально - Рейтинг Anifox"></i>
                            </li>
                            <li>
                                <i class="fas fa-star" title="Средний - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Хорошо - Рейтинг Anifox"></i>
                            </li>
                            <li>
                                <i class="fas fa-star" title="Супер - Рейтинг Anifox"></i>
                            </li>
                        @else
                            <li class="active">
                                <i class="fas fa-star" title="Плохо - Рейтинг Anifox"></i>
                            </li>
                            <li>
                                <i class="fas fa-star" title="Нормально - Рейтинг Anifox"></i>
                            </li>
                            <li>
                                <i class="fas fa-star" title="Средний - Рейтинг Anifox"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star" title="Хорошо - Рейтинг Anifox"></i>
                            </li>
                            <li>
                                <i class="fas fa-star" title="Супер - Рейтинг Anifox"></i>
                            </li>
                        @endif
                    </ul>

                    <div class="content__product-navs">
                        <button class="btn-primary" style="font-family: Roboto">Возрасть: +{{ $product->old }}</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
