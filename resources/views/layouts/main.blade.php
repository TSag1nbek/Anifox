<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Pagination Css -->
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Header Css -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- Main Menu -->
    <link rel="stylesheet" href="{{ asset('css/mainmenu.css') }}">
    <!-- Full Search Css -->
    <link rel="stylesheet" href="{{ asset('css/full-search.css') }}">
    <!-- Mobile Footer -->
    <link rel="stylesheet" href="{{ asset('css/mobile-footer.css') }}">
    <!-- Slider Css -->
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <!-- Content Css -->
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <!-- Footer Css -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <!-- Category Css -->
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
    <!-- Episode Show Css -->
    <link rel="stylesheet" href="{{ asset('css/product-show.css') }}">
    <!-- Profile Css -->
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>@yield('title')</title>
</head>
<body>
<!-- Header -->
<header class="header">
    <div class="main__container">
        <div class="header__inner">

            <div class="header__main">
                <!-- Header Burger -->
                <div class="header__burger" id="header__burger">
                    <span></span>
                </div>

                <!-- Header Logo -->
                <a href="{{ route('home') }}" class="header__logo">
                    <img src="{{ asset('img/logo/Logo2.png') }}" alt="Anifox.ru">
                </a>

                <!-- Search only for mobile device -->
                <button class="header__mobile-search" id="header__mobile-search">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <form action="{{ route('search') }}" method="GET" class="header__search">
                <input type="text" placeholder="Поиск..." name="query" id="query" value="{{ request()->input('query') }}">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>

            <div class="header__navs">
                <a href="#" class="header__link">
                    <i class="fas fa-download"></i>
                </a>
                <a href="#" class="header__link">
                    <i class="fas fa-bell"></i>
                    <span class="new__messages"></span>
                </a>
                @auth
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('img/default/avatar.jpg') }}" class="header__nav-img">
                </a>
                @endauth

                @guest
                    <a href="{{ route('auth.signin') }}" class="is_guest">Войти</a>
                @endguest
            </div>

        </div>
    </div>
</header>

<!-- Main Menu -->
<div class="main__menu" id="main__menu">
    <div class="main__container">
        <ul class="main__menu-list">
            <li>
                <a href="{{ route('home') }}" class="main__menu-link">Главная</a>
            </li>
            <li>
                <a class="main__menu-link">Категорий</a>
                <span class="is__parent" id="is__parent"></span>
                <ul class="main__dropdown" id="main__dropdown">
                    @foreach($categories as $category)
                    <li>
                        <a href="{{ route('showCategory', $category->slug) }}" class="main__dropdown-link">{{ $category->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('home') }}" class="main__menu-link">Рекомендаций</a>
            </li>
            <li>
                <a href="{{ route('home.popular') }}" class="main__menu-link">Популярные аниме</a>
            </li>
        </ul>
    </div>
</div>

<!-- Full Search Window -->
<div class="full__search" id="full__search">
    <div class="container">

        <div class="search__inner">
            <!-- Close Full Search Window Btn -->
            <button class="search__close-btn" id="search__window-close">
                <i class="far fa-times-circle"></i>
            </button>
        </div>

        <form method="get" action="{{ route('search') }}" class="search__form">
            <input type="text" placeholder="Поиск..." name="query" id="query" value="{{ request()->input('query') }}">
            <button type="submit" class="full__search-btn"><i class="fas fa-search"></i></button>
        </form>

        <div class="search__products">
            @foreach($searchProducts as $searchProduct)
            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    {{ $searchProduct->title }}
                </a>
            </div>
            @endforeach
        </div>

        <h1 class="filter__title">Жанры</h1>
        <div class="filter__container">
            @foreach($categories as $category)
            <a href="{{ route('showCategory', $category->slug) }}" class="filter__item">{{ $category->title }}</a>
            @endforeach
        </div>

        <h1 class="filter__title">Типы</h1>
        <div class="filter__container">
            @foreach($types as $type)
                <a href="{{ route('showType', $type->slug) }}" class="filter__item">{{ $type->title }}</a>
            @endforeach
        </div>

        <h1 class="filter__title">Сортировка</h1>
        <div class="filter__container">
            <a href="{{ route('home') }}" class="filter__item">Рекомендация</a>
            <a href="{{ route('home.popular') }}" class="filter__item">Популярные</a>
        </div>

        <h1 class="filter__title">Год выпуска:</h1>
        <div class="filter__container">
            @foreach($dates as $date)
            <a href="{{ route('showDate', $date->date) }}" class="filter__item">{{ $date->date }}</a>
            @endforeach
        </div>

    </div>
</div>

<!-- Content -->
@yield('content')

<!-- Mobile Footer -->
<footer class="mobile-footer">
    <div class="main__container">
        <ul class="mobile-footer__menu">
            <li>
                <a href="{{ route('home') }}" class="mobile-footer__link {{ (request()->is('/')) ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('home.popular') }}" class="mobile-footer__link {{ (request()->is('popular')) ? 'active' : '' }}">
                    <i class="fas fa-heart"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}" class="mobile-footer__link {{ (request()->is('profile')) ? 'active' : '' }}">
                    <i class="fas fa-user-circle"></i>
                </a>
            </li>
        </ul>
    </div>
</footer>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <div class="footer__item">
                <h1 class="footer__title">Основные разделы</h1>

                <!-- Footer Menu -->
                <ul class="footer__menu">
                    <li>
                        <a href="{{ route('home') }}" class="footer__link">Главная</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Новинки</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Стол Заказов</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Помощь</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Конакты</a>
                    </li>
                </ul>
            </div>

            <div class="footer__item">
                <h1 class="footer__title">Последние коментарии</h1>
                @foreach($lastComments as $lastComment)
                <div class="footer__product">
                    <a href="{{ route('animeShow', _product($lastComment->product_id)->slug) }}" class="footer__product-img">
                        <img src="{{ asset(_product($lastComment->product_id)->image) }}">
                    </a>
                    <div class="footer__product-navs">
                        <div class="footer__product-inner">
                            <a href="{{ route('animeShow', _product($lastComment->product_id)->slug) }}" class="footer__product-name">
                                {{ _product($lastComment->product_id)->title }}
                            </a>
                            <p class="footer__product-time">{{ $lastComment->created_at->format("d.m.Y") }}</p>
                        </div>
                        <p class="footer__product-user">{{ _user($lastComment->user_id)->username }}</p>
                        <p class="footer__product-text">{{\Illuminate\Support\Str::limit($lastComment->comment, 98)}}</p>
                    </div>
                </div>
                @endforeach


            </div>

            <div class="footer__item">
                <h1 class="footer__title">Следите за нами</h1>
                <ul class="footer__flex-menu">
                    <li>
                        <a href="#" class="footer__link">
                            <i class="fab fa-vk"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </li>
                </ul>

                <!-- Footer Logo -->
                <a href="{{ route('home') }}" class="footer__logo">
                    AniFox
                    <span>online cinema</span>
                </a>
            </div>
        </div>
    </div>
</footer>

<div class="footer__copyright">
    <div class="container">
        @2021 Anifox. Все права защищены.
    </div>
</div>

<!-- Header JS -->
<script src="{{ asset('js/header.js') }}"></script>
<!-- Full Window Search JS -->
<script src="{{ asset('js/fullsearch.js') }}"></script>
<!-- JQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Slick Slider Js -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- Slider JS -->
<script src="{{ asset('js/slider.js') }}"></script>
</body>
</html>
