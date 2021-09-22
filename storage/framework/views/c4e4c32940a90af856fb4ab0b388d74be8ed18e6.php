<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Main Css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Header Css -->
    <link rel="stylesheet" href="css/header.css">
    <!-- Main Menu -->
    <link rel="stylesheet" href="css/mainmenu.css">
    <!-- Full Search Css -->
    <link rel="stylesheet" href="css/full-search.css">
    <!-- Mobile Footer Css -->
    <link rel="stylesheet" href="css/mobile-footer.css">
    <!-- Content Css -->
    <link rel="stylesheet" href="css/content.css">
    <!-- Product Show Css -->
    <link rel="stylesheet" href="css/product-show.css">
    <!-- Pagination Css -->
    <link rel="stylesheet" href="css/pagination.css">
    <!-- Footer Css -->
    <link rel="stylesheet" href="css/footer.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <title>Anifor.ru - Чёрный клевер</title>
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
                <a href="index.html" class="header__logo">
                    Kinogo
                </a>

                <!-- Search only for mobile device -->
                <button class="header__mobile-search" id="header__mobile-search">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <form action="#" class="header__search">
                <input type="text" placeholder="Пираты Карибского моря 2">
                <button><i class="fas fa-search"></i></button>
            </form>

            <div class="header__navs">
                <a href="#" class="header__link">
                    <i class="fas fa-download"></i>
                </a>
                <a href="#" class="header__link">
                    <i class="fas fa-bell"></i>
                    <span class="new__messages"></span>
                </a>
                <img src="img/default/avatar.jpg" class="header__nav-img">
            </div>

        </div>
    </div>
</header>

<!-- Main Menu -->
<div class="main__menu" id="main__menu">
    <div class="main__container">
        <ul class="main__menu-list">
            <li>
                <a href="#" class="main__menu-link">Главная</a>
            </li>
            <li>
                <a href="#" class="main__menu-link">Категорий</a>
                <span class="is__parent" id="is__parent"></span>
                <ul class="main__dropdown" id="main__dropdown">
                    <li>
                        <a href="#" class="main__dropdown-link">Биография</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Боевики</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Военные</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Детективы</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Документальные</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Драмы</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Исторические</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Комедии</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Криминал</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Мелодрамы</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Мультфильмы</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Прикльючения</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Семейные</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Триллеры</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Ужасы</a>
                    </li>
                    <li>
                        <a href="#" class="main__dropdown-link">Фантастика</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="main__menu-link">Новинки</a>
            </li>
            <li>
                <a href="#" class="main__menu-link">Стол Заказов</a>
            </li>
            <li>
                <a href="#" class="main__menu-link">Помощь</a>
            </li>
            <li>
                <a href="#" class="main__menu-link">Конакты</a>
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

        <form action="#" class="search__form">
            <input type="text" placeholder="Поиск..." id="full-search__input">
            <button class="btn-clear"><i class="fas fa-backspace"></i></button>
            <button class="full__search-btn"><i class="fas fa-search"></i></button>
        </form>

        <div class="search__products">
            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Пираты Карибского моря 2
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Меч короля Артура
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Гадкий я 3
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Тор Рагнарёк
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Бладшот
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Райя и последний Дракон
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Красавица и Чудовище
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Варкрафт
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Моана
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Человек-Паук: Вдали от дома
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Черепашки-ниндзя
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Последний богатырь
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Принц Персии
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Тачки 3
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Вперёд
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Туннель: Опасно для жизни
                </a>
            </div>

            <div class="search__product-item">
                <i class="fas fa-video"></i>
                <a href="#" class="search__product-title">
                    Мулан
                </a>
            </div>

        </div>

        <h1 class="filter__title">Жанры</h1>
        <div class="filter__container">
            <a href="#" class="filter__item active">Боевики</a>
            <a href="#" class="filter__item">Прикльючение</a>
            <a href="#" class="filter__item">Фантастика</a>
            <a href="#" class="filter__item">Детективы</a>
        </div>

        <h1 class="filter__title">Сортировка</h1>
        <div class="filter__container">
            <a href="#" class="filter__item">Новинки</a>
            <a href="#" class="filter__item">Популярные</a>
            <a href="#" class="filter__item">Последние</a>
        </div>

        <h1 class="filter__title">Качество</h1>
        <div class="filter__container">
            <a href="#" class="filter__item">4K</a>
            <a href="#" class="filter__item">FullHD</a>
            <a href="#" class="filter__item">HD</a>
            <a href="#" class="filter__item">HDRip</a>
        </div>

        <h1 class="filter__title">Год выпуска:</h1>
        <div class="filter__container">
            <a href="#" class="filter__item">1995</a>
            <a href="#" class="filter__item">1996</a>
            <a href="#" class="filter__item">1997</a>
            <a href="#" class="filter__item">1998</a>
        </div>

    </div>
</div>

<!-- Product Show -->
<div class="product-show">
    <div class="">
        <div class="product__hide-navs">
            <div class="bg__shadow"></div>
            <img src="img/products/hide1.jpg">
        </div>

        <div class="product__inner container">
            <div class="product__navs">
                <img src="img/products/1.jpg" class="product__img">

                <div class="product__nav-images">
                    <p class="product-show__txt">
                        Кадры из фильма
                    </p>

                    <div class="product__images-inner">
                        <div class="product__img-item">
                            <img src="img/products/hide1.jpg">
                        </div>
                        <div class="product__img-item">
                            <img src="img/products/hide1.jpg">
                        </div>
                        <div class="product__img-item">
                            <img src="img/products/hide1.jpg">
                        </div>
                    </div>

                    <button class="btn-product__show">Добавить в закладки</button>
                </div>
            </div>

            <div class="product__body">
                <div class="product__body-container">

                    <div class="product__container-head">
                        <img src="img/products/1.jpg" alt="" class="product__img-mobile">
                    </div>

                    <div class="product__container-body">
                        <div class="product__body-inner">
                            <h1 class="product-title">Чёрный клевер</h1>
                            <div class="product__body-navs">
                                <div class="product__quality">HDRip</div>
                                <div class="product__quality">FullHD</div>
                            </div>
                        </div>

                        <div class="product__body-content">
                            <ul class="product__menu">
                                <li>
                                    Режиссеры: Эрик Гульон
                                </li>
                                <li>
                                    Год выпуска: <a href="#">2017</a>
                                </li>
                                <li>
                                    Страна: <a href="#">США</a>
                                </li>
                                <li>
                                    Жанры: <a href="#">Мультфильмы</a> <a href="#">Семейные</a>
                                </li>
                            </ul>
                        </div>

                        <div class="product__body-inner">
                            <ul class="product__menu">
                                <li>
                                    Перевод: <a href="#">Дублированный iTunes</a>
                                </li>
                                <li>
                                    Длительность: 1:29:41
                                </li>
                            </ul>

                            <ul class="product__actors">
                                <li>
                                    <a href="#" class="product__acotrs-img">
                                        <img src="img/default/avatar.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="product__acotrs-img">
                                        <img src="img/default/avatar.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="product__acotrs-img">
                                        <img src="img/default/avatar.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="product__acotrs-img">
                                        +8
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product__body-container only__mobile">
                    <div class="product__container-head">
                        <button class="btn"><i class="fas fa-play"></i>Смотреть</button>
                    </div>
                    <div class="product__container-body float-right">
                        <button class="btn__squard"><i class="fas fa-paperclip"></i></button>
                        <button class="btn__squard active-red"><i class="fas fa-heart"></i></button>
                    </div>
                </div>

                <div class="product__body-content">
                    <div class="product__description">
                        <p class="product-show__txt">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto non, ea maiores voluptas quisquam saepe, optio eveniet, facere corporis dignissimos incidunt quod enim officia quia doloribus temporibus? Alias sapiente, voluptatibus aliquid in fuga tempora vel at quia nostrum necessitatibus praesentium laudantium reprehenderit doloremque sed officiis distinctio facilis omnis commodi illo nisi, quod soluta incidunt explicabo fugit. Voluptatem neque, quae eveniet odit impedit tenetur id necessitatibus! Culpa architecto tempora dolore beatae dolores recusandae soluta? Reprehenderit, repudiandae?
                            <br><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, deleniti error, mollitia doloremque non autem recusandae saepe qui deserunt eum explicabo accusantium voluptatum consequatur aspernatur nemo perferendis provident. Expedita officiis officia facere dolores quod, velit deserunt incidunt est a autem.
                        </p>
                    </div>
                </div>

                <!-- Player -->
                <div class="product__series">
                    <div class="product__season">
                        <h1 class="product__season-title">Пролог</h1>
                        <div class="product__season-series">
                            <a href="#" class="product__season-link">1 Серии</a>
                            <a href="#" class="product__season-link">2 Серии</a>
                            <a href="#" class="product__season-link">3 Серии</a>
                            <a href="#" class="product__season-link">4 Серии</a>
                            <a href="#" class="product__season-link">5 Серии</a>
                            <a href="#" class="product__season-link">6 Серии</a>
                            <a href="#" class="product__season-link">7 Серии</a>
                            <a href="#" class="product__season-link">8 Серии</a>
                            <a href="#" class="product__season-link">9 Серии</a>
                            <a href="#" class="product__season-link">10 Серии</a>
                            <a href="#" class="product__season-link">11 Серии</a>
                            <a href="#" class="product__season-link">12 Серии</a>
                            <a href="#" class="product__season-link">13 Серии</a>
                        </div>
                    </div>

                    <div class="product__season">
                        <h1 class="product__season-title">Подземелье</h1>
                        <div class="product__season-series">
                            <a href="#" class="product__season-link">14 Серии</a>
                            <a href="#" class="product__season-link">15 Серии</a>
                            <a href="#" class="product__season-link">16 Серии</a>
                            <a href="#" class="product__season-link">17 Серии</a>
                            <a href="#" class="product__season-link">18 Серии</a>
                            <a href="#" class="product__season-link">19 Серии</a>
                        </div>
                    </div>

                    <div class="product__season">
                        <h1 class="product__season-title">Перерождение</h1>
                        <div class="product__season-series">
                            <a href="#" class="product__season-link">20 Серии</a>
                            <a href="#" class="product__season-link">21 Серии</a>
                            <a href="#" class="product__season-link">22 Серии</a>
                            <a href="#" class="product__season-link">23 Серии</a>
                            <a href="#" class="product__season-link">24 Серии</a>
                            <a href="#" class="product__season-link">25 Серии</a>
                            <a href="#" class="product__season-link">26 Серии</a>
                            <a href="#" class="product__season-link">27 Серии</a>
                            <a href="#" class="product__season-link">28 Серии</a>
                            <a href="#" class="product__season-link">29 Серии</a>
                            <a href="#" class="product__season-link">30 Серии</a>
                            <a href="#" class="product__season-link">31 Серии</a>
                            <a href="#" class="product__season-link">32 Серии</a>
                            <a href="#" class="product__season-link">33 Серии</a>
                            <a href="#" class="product__season-link">34 Серии</a>
                            <a href="#" class="product__season-link">35 Серии</a>
                            <a href="#" class="product__season-link">36 Серии</a>
                            <a href="#" class="product__season-link">37 Серии</a>
                            <a href="#" class="product__season-link">38 Серии</a>
                            <a href="#" class="product__season-link">39 Серии</a>
                            <a href="#" class="product__season-link">40 Серии</a>
                            <a href="#" class="product__season-link">41 Серии</a>
                            <a href="#" class="product__season-link">42 Серии</a>
                            <a href="#" class="product__season-link">43 Серии</a>
                            <a href="#" class="product__season-link">44 Серии</a>
                            <a href="#" class="product__season-link">45 Серии</a>
                            <a href="#" class="product__season-link">46 Серии</a>
                            <a href="#" class="product__season-link">47 Серии</a>
                            <a href="#" class="product__season-link">48 Серии</a>
                            <a href="#" class="product__season-link">49 Серии</a>
                            <a href="#" class="product__season-link">50 Серии</a>
                            <a href="#" class="product__season-link">51 Серии</a>
                            <a href="#" class="product__season-link">52 Серии</a>
                            <a href="#" class="product__season-link">53 Серии</a>
                            <a href="#" class="product__season-link">54 Серии</a>
                            <a href="#" class="product__season-link">55 Серии</a>
                            <a href="#" class="product__season-link">56 Серии</a>
                            <a href="#" class="product__season-link">57 Серии</a>
                            <a href="#" class="product__season-link">58 Серии</a>
                            <a href="#" class="product__season-link">59 Серии</a>
                            <a href="#" class="product__season-link">60 Серии</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="product__body-inner">
                <div class="title m-none">
                    <h1>Комментарии к фильму</h1>
                    <i class="fas fa-comment-alt"></i>
                </div>
                <button class="btn-product__show btn-product">Добавить в закладки</button>
            </div>

            <!-- Comments -->
            <div class="product__commnets">
                <div class="product__comment-item">
                    <div class="comment__navs">
                        <img src="img/default/avatar.jpg" alt="" class="comment__img">
                        <div class="product__flex">
                            <button class="product__btn"><span class="cl-red">-</span> 2</button>
                            <button class="product__btn"><span class="cl-green">+</span> 8</button>
                        </div>
                    </div>
                    <div class="comment__body">
                        <div class="product__flex">
                            <h1 class="comment__username">Elena</h1>
                            <p class="product__time">5 октября 2021 / 20:47</p>
                        </div>
                        <p class="comment__txt">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat tenetur ab labore voluptates, earum praesentium distinctio odit quas, placeat quaerat delectus, ad natus aspernatur officiis ut id. Beatae atque nihil nisi quam harum reprehenderit quos a cupiditate ducimus, soluta sit ullam dolore! Totam, molestias dolorum? Suscipit aperiam velit iste nisi.
                        </p>
                    </div>
                </div>

                <div class="product__comment-item">
                    <div class="comment__navs">
                        <img src="img/default/avatar.jpg" alt="" class="comment__img">
                        <div class="product__flex">
                            <button class="product__btn"><span class="cl-red">-</span> 2</button>
                            <button class="product__btn"><span class="cl-green">+</span> 8</button>
                        </div>
                    </div>
                    <div class="comment__body">
                        <div class="product__flex">
                            <h1 class="comment__username">Максим</h1>
                            <p class="product__time">5 октября 2021 / 20:47</p>
                        </div>
                        <p class="comment__txt">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat tenetur ab labore voluptates, earum praesentium distinctio odit quas, placeat quaerat delectus, ad natus aspernatur officiis ut id. Beatae atque nihil nisi quam harum reprehenderit quos a cupiditate ducimus, soluta sit ullam dolore! Totam, molestias dolorum? Suscipit aperiam velit iste nisi.
                        </p>
                    </div>
                </div>

                <div class="product__comment-item">
                    <div class="comment__navs">
                        <img src="img/default/avatar.jpg" alt="" class="comment__img">
                        <div class="product__flex">
                            <button class="product__btn"><span class="cl-red">-</span> 2</button>
                            <button class="product__btn"><span class="cl-green">+</span> 8</button>
                        </div>
                    </div>
                    <div class="comment__body">
                        <div class="product__flex">
                            <h1 class="comment__username">Александр</h1>
                            <p class="product__time">5 октября 2021 / 20:47</p>
                        </div>
                        <p class="comment__txt">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat tenetur ab labore voluptates, earum praesentium distinctio odit quas, placeat quaerat delectus, ad natus aspernatur officiis ut id. Beatae atque nihil nisi quam harum reprehenderit quos a cupiditate ducimus, soluta sit ullam dolore! Totam, molestias dolorum? Suscipit aperiam velit iste nisi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">

                    <div class="footer__item">
                        <h1 class="footer__title">Основные разделы</h1>

                        <!-- Footer Menu -->
                        <ul class="footer__menu">
                            <li>
                                <a href="#" class="footer__link">Главная</a>
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
                        <div class="footer__product">
                            <a href="#" class="footer__product-img">
                                <img src="img/products/13.jpg">
                            </a>
                            <div class="footer__product-navs">
                                <div class="footer__product-inner">
                                    <a href="#" class="footer__product-name">Тор: Рагнарёк</a>
                                    <p class="footer__product-time">17:13</p>
                                </div>
                                <p class="footer__product-user">Don Man</p>
                                <p class="footer__product-text">Сначала вроде бы ничего такой, а потом все окончательно испортилось...</p>
                            </div>
                        </div>

                        <div class="footer__product">
                            <a href="#" class="footer__product-img">
                                <img src="img/products/6.jpg">
                            </a>
                            <div class="footer__product-navs">
                                <div class="footer__product-inner">
                                    <a href="#" class="footer__product-name">Человек-Паук: Вдали от дома</a>
                                    <p class="footer__product-time">10:48</p>
                                </div>
                                <p class="footer__product-user">Leno4ka</p>
                                <p class="footer__product-text">Все говорили что фильм не очень, а мне очень даже понравился. Особенно...</p>
                            </div>
                        </div>
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
                        <a href="#" class="footer__logo">
                            Kinogo
                            <span>online cinema</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <div class="footer__copyright">
            <div class="container">
                @2021  Anifox Online Cinema. All Rights Reserved.
            </div>
        </div>
    </div>
</div>

<!-- Mobile Footer -->
<footer class="mobile-footer">
    <div class="main__container">
        <ul class="mobile-footer__menu">
            <li>
                <a href="#" class="mobile-footer__link active">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li>
                <a href="#" class="mobile-footer__link">
                    <i class="fas fa-heart"></i>
                </a>
            </li>
            <li>
         v       <a href="#" class="mobile-footer__link">
                    <i class="fas fa-user-circle"></i>
                    <span class="new__messages"></span>
                </a>
            </li>
        </ul>
    </div>
</footer>

<!-- Header JS -->
<script src="js/header.js"></script>
<!-- Full Window Search JS -->
<script src="js/fullsearch.js"></script>
</body>
</html>
<?php /**PATH /home/saginbek/play/anifox/resources/views/home/anime/show.blade.php ENDPATH**/ ?>
