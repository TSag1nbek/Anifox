<?php $__env->startSection('title', 'Популярные аниме в anifox.ru'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Slider -->
    <div class="slider">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="slider__item">
                <img src="<?php echo e(asset($slider->image)); ?>" class="slider__img">
                <div class="slider__navs">
                    <?php $__currentLoopData = $slider->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('animeShow', $product->slug)); ?>" class="slider__play-btn">
                            <img src="img/icons/Vector.svg">
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="slider__body">
                        <p class="slider__status"><?php echo e($slider->rating); ?></p>
                        <a href="<?php echo e(route('animeShow', $product->slug)); ?>" class="slider__name"><?php echo e($product->title); ?></a>
                        <p class="slider__quality">+<?php echo e($product->old); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <a href="<?php echo e(route('home')); ?>" class="content__link active">Все</a>
                    </li>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('showCategory', $category->slug)); ?>" class="content__link"><?php echo e($category->title); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                        <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="<?php echo e(route('showDate', $date->date)); ?>" class="sutitle__dropdown-link"><?php echo e($date->date); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            <a href="<?php echo e(route('home')); ?>" class="sutitle__dropdown-link">Все</a>
                                        </li>
                                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="<?php echo e(route('showType', $type->slug)); ?>" class="sutitle__dropdown-link"><?php echo e($type->title); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            <a href="<?php echo e(route('home')); ?>" class="sutitle__dropdown-link">Рекомендация</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('home.popular')); ?>" class="sutitle__dropdown-link">Популярные</a>
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
                    <?php $__currentLoopData = $animes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="content__product">
                            <a href="<?php echo e(route('animeShow', $anime->slug)); ?>" class="content__product-img">
                                <?php if(is_null($anime->image)): ?>
                                    <img src="<?php echo e(asset('img/products/no-image.png')); ?>">
                                <?php else: ?>
                                    <img src="<?php echo e(asset($anime->image)); ?>">
                                <?php endif; ?>
                                <div class="info">
                                    <p style="font-size: 48px"><i class="fas fa-play"></i> </p>
                                </div>
                                <span class="is__new">
                           <i class="fas fa-eye"></i> <?php echo e($anime->view_count); ?>

                        </span>
                            </a>

                            <a href="<?php echo e(route('animeShow', $anime->slug)); ?>" class="content__product-name"><?php echo e($anime->title); ?></a>

                            <ul class="content__product-menu">
                                <?php $__currentLoopData = $anime->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('showCategory', $category->slug)); ?>" class="content__product-category"><?php echo e($category->title); ?></a> <a href="<?php echo e(route('anime.show', $anime->id)); ?>" class="content__product-category"></a><i class="fas fa-ellipsis-h" style="color: #434859"></i>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                            <!-- Stars -->
                            <ul class="content__product-stars">
                                <?php if($anime->rating === 5): ?>
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
                                <?php elseif($anime->rating === 4): ?>
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
                                <?php elseif($anime->rating === 3): ?>
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
                                <?php elseif($anime->rating === 2): ?>
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
                                <?php else: ?>
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
                                <?php endif; ?>
                            </ul>


                            <div class="content__product-navs">
                                <button class="btn-primary" style="font-family: Roboto">Возрасть: +<?php echo e($anime->old); ?></button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php echo e($animes->links("pagination::bootstrap-4")); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/home/popular.blade.php ENDPATH**/ ?>