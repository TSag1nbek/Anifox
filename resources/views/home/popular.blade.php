@extends('layouts.main')

@section('title', 'Популярные аниме в anifox.ru')

@section('content')
    <!-- Slider -->
    <div class="slider">
        @foreach($sliders as $slider)
            <div class="slider__item">
                <img src="{{ asset($slider->image) }}" class="slider__img">
                <div class="slider__navs">
                    @foreach($slider->products as $product)
                        <a href="{{ route('animeShow', $product->slug) }}" class="slider__play-btn">
                            <img src="img/icons/Vector.svg">
                        </a>
                    @endforeach
                    <div class="slider__body">
                        <p class="slider__status">{{ $slider->rating }}</p>
                        <a href="{{ route('animeShow', $product->slug) }}" class="slider__name">{{ $product->title }}</a>
                        <p class="slider__quality">+{{ $product->old }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Content -->
    <div class="main__container">
        <div class="content">
            <!-- Content Navs -->
            <div class="content__navs">
                <div class="title">
                    <h1>Выбор жанр</h1>
                    <i class="fas fa-list-ul"></i>
                </div>

                <!-- Content Menu -->
                <ul class="content__menu">
                    <li>
                        <a href="{{ route('home') }}" class="content__link active">Все</a>
                    </li>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ route('showCategory', $category->slug) }}" class="content__link">{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>


            </div>

            <!-- Content Body -->
            <div class="content__body">
                <div class="content__inner">
                    <div class="content__item">
                        <div class="subtitle">
                            <p class="subtitle-desc">Год выпуска:</p>
                            <button class="subtitle-btn">
                                <div class="subtitle-name">2021</div>
                                <div class="subtitle-icon no-rotate"><i class="far fa-calendar-alt"></i></div>

                                <div class="subtitle__dropdown">
                                    <ul class="subtitle__dropdown-box">
                                        @foreach($dates as $date)
                                            <li>
                                                <a href="{{ route('showDate', $date->date) }}" class="sutitle__dropdown-link">{{ $date->date }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </button>
                        </div>

                        <div class="subtitle">
                            <p class="subtitle-desc">Типы:</p>
                            <button class="subtitle-btn">
                                <div class="subtitle-name">Все</div>
                                <div class="subtitle-icon"><i class="fas fa-angle-down"></i></div>

                                <div class="subtitle__dropdown">
                                    <ul class="subtitle__dropdown-box">
                                        <li>
                                            <a href="{{ route('home') }}" class="sutitle__dropdown-link">Все</a>
                                        </li>
                                        @foreach($types as $type)
                                            <li>
                                                <a href="{{ route('showType', $type->slug) }}" class="sutitle__dropdown-link">{{ $type->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </button>
                        </div>

                        <div class="subtitle">
                            <p class="subtitle-desc">Сортировка:</p>
                            <button class="subtitle-btn">
                                <div class="subtitle-name">Популярные</div>
                                <div class="subtitle-icon"><i class="fas fa-angle-down"></i></div>

                                <div class="subtitle__dropdown">
                                    <ul class="subtitle__dropdown-box">
                                        <li>
                                            <a href="{{ route('home') }}" class="sutitle__dropdown-link">Рекомендация</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.popular') }}" class="sutitle__dropdown-link">Популярные</a>
                                        </li>
                                    </ul>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="content__item">
                        <div class="title">
                            <h1>Мы соц.сетях</h1>
                            <a href="#" class="footer__link">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a href="#" class="footer__link">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="footer__link">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="footer__link">
                                <i class="fab fa-telegram-plane"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="content__products">
                    @foreach($animes as $anime)
                        <div class="content__product">
                            <a href="{{ route('animeShow', $anime->slug) }}" class="content__product-img">
                                @if(is_null($anime->image))
                                    <img src="{{ asset('img/products/no-image.png') }}">
                                @else
                                    <img src="{{ asset($anime->image) }}">
                                @endif
                                <div class="info">
                                    <p style="font-size: 48px"><i class="fas fa-play"></i> </p>
                                </div>
                                <span class="is__new">
                           <i class="fas fa-eye"></i> {{ $anime->view_count }}
                        </span>
                            </a>

                            <a href="{{ route('animeShow', $anime->slug) }}" class="content__product-name">{{ $anime->title }}</a>

                            <ul class="content__product-menu">
                                @foreach($anime->categories as $category)
                                    <li>
                                        <a href="{{ route('showCategory', $category->slug) }}" class="content__product-category">{{ $category->title }}</a> <a href="{{ route('anime.show', $anime->id) }}" class="content__product-category"></a><i class="fas fa-ellipsis-h" style="color: #434859"></i>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Stars -->
                            <ul class="content__product-stars">
                                @if($anime->rating === 5)
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
                                @elseif($anime->rating === 4)
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
                                @elseif($anime->rating === 3)
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
                                @elseif($anime->rating === 2)
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
                                <button class="btn-primary" style="font-family: Roboto">Возрасть: +{{ $anime->old }}</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$animes->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
@endsection
