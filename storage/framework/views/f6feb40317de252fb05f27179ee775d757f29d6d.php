<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Pagination Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/pagination.css')); ?>">
    <!-- Main Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <!-- Header Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
    <!-- Main Menu -->
    <link rel="stylesheet" href="<?php echo e(asset('css/mainmenu.css')); ?>">
    <!-- Full Search Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/full-search.css')); ?>">
    <!-- Mobile Footer -->
    <link rel="stylesheet" href="<?php echo e(asset('css/mobile-footer.css')); ?>">
    <!-- Slider Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>">
    <!-- Content Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/content.css')); ?>">
    <!-- Footer Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
    <!-- Category Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/category.css')); ?>">
    <!-- Episode Show Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/product-show.css')); ?>">
    <!-- Profile Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title><?php echo $__env->yieldContent('title'); ?></title>
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
                <a href="<?php echo e(route('home')); ?>" class="header__logo">
                    <img src="<?php echo e(asset('img/logo/Logo2.png')); ?>" alt="Anifox.ru">
                </a>

                <!-- Search only for mobile device -->
                <button class="header__mobile-search" id="header__mobile-search">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <form action="<?php echo e(route('search')); ?>" method="GET" class="header__search">
                <input type="text" placeholder="Поиск..." name="query" id="query" value="<?php echo e(request()->input('query')); ?>">
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
                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('profile')); ?>">
                    <img src="<?php echo e(asset('img/default/avatar.jpg')); ?>" class="header__nav-img">
                </a>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('auth.signin')); ?>" class="is_guest">Войти</a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</header>

<!-- Main Menu -->
<div class="main__menu" id="main__menu">
    <div class="main__container">
        <ul class="main__menu-list">
            <li>
                <a href="<?php echo e(route('home')); ?>" class="main__menu-link">Главная</a>
            </li>
            <li>
                <a class="main__menu-link">Категорий</a>
                <span class="is__parent" id="is__parent"></span>
                <ul class="main__dropdown" id="main__dropdown">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('showCategory', $category->slug)); ?>" class="main__dropdown-link"><?php echo e($category->title); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('home')); ?>" class="main__menu-link">Рекомендаций</a>
            </li>
            <li>
                <a href="<?php echo e(route('home.popular')); ?>" class="main__menu-link">Популярные аниме</a>
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

        <form method="get" action="<?php echo e(route('search')); ?>" class="search__form">
            <input type="text" placeholder="Поиск..." name="query" id="query" value="<?php echo e(request()->input('query')); ?>">
            <button type="submit" class="full__search-btn"><i class="fas fa-search"></i></button>
        </form>

        <div class="search__products">
            <?php $__currentLoopData = $searchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    <?php echo e($searchProduct->title); ?>

                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <h1 class="filter__title">Жанры</h1>
        <div class="filter__container">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('showCategory', $category->slug)); ?>" class="filter__item"><?php echo e($category->title); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <h1 class="filter__title">Типы</h1>
        <div class="filter__container">
            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('showType', $type->slug)); ?>" class="filter__item"><?php echo e($type->title); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <h1 class="filter__title">Сортировка</h1>
        <div class="filter__container">
            <a href="<?php echo e(route('home')); ?>" class="filter__item">Рекомендация</a>
            <a href="<?php echo e(route('home.popular')); ?>" class="filter__item">Популярные</a>
        </div>

        <h1 class="filter__title">Год выпуска:</h1>
        <div class="filter__container">
            <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('showDate', $date->date)); ?>" class="filter__item"><?php echo e($date->date); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</div>

<!-- Content -->
<?php echo $__env->yieldContent('content'); ?>

<!-- Mobile Footer -->
<footer class="mobile-footer">
    <div class="main__container">
        <ul class="mobile-footer__menu">
            <li>
                <a href="<?php echo e(route('home')); ?>" class="mobile-footer__link <?php echo e((request()->is('/')) ? 'active' : ''); ?>">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('home.popular')); ?>" class="mobile-footer__link <?php echo e((request()->is('popular')) ? 'active' : ''); ?>">
                    <i class="fas fa-heart"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('profile')); ?>" class="mobile-footer__link <?php echo e((request()->is('profile')) ? 'active' : ''); ?>">
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
                        <a href="<?php echo e(route('home')); ?>" class="footer__link">Главная</a>
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
                <?php $__currentLoopData = $lastComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastComment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="footer__product">
                    <a href="<?php echo e(route('animeShow', _product($lastComment->product_id)->slug)); ?>" class="footer__product-img">
                        <img src="<?php echo e(asset(_product($lastComment->product_id)->image)); ?>">
                    </a>
                    <div class="footer__product-navs">
                        <div class="footer__product-inner">
                            <a href="<?php echo e(route('animeShow', _product($lastComment->product_id)->slug)); ?>" class="footer__product-name">
                                <?php echo e(_product($lastComment->product_id)->title); ?>

                            </a>
                            <p class="footer__product-time"><?php echo e($lastComment->created_at->format("d.m.Y")); ?></p>
                        </div>
                        <p class="footer__product-user"><?php echo e(_user($lastComment->user_id)->username); ?></p>
                        <p class="footer__product-text"><?php echo e(\Illuminate\Support\Str::limit($lastComment->comment, 98)); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
                <a href="<?php echo e(route('home')); ?>" class="footer__logo">
                    AniFox
                    <span>online cinema</span>
                </a>
            </div>
        </div>
    </div>
</footer>

<div class="footer__copyright">
    <div class="container">
        @2021  Anifox. Все права защищены.
    </div>
</div>

<!-- Header JS -->
<script src="<?php echo e(asset('js/header.js')); ?>"></script>
<!-- Full Window Search JS -->
<script src="<?php echo e(asset('js/fullsearch.js')); ?>"></script>
<!-- JQuery -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<!-- Slick Slider Js -->
<script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
<!-- Slider JS -->
<script src="<?php echo e(asset('js/slider.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/saginbek/play/anifox/resources/views/layouts/main.blade.php ENDPATH**/ ?>