<?php $__env->startSection('title', $date->date . ' ANIFOX.RU'); ?>

<?php $__env->startSection('content'); ?>
    <div class="category__container">
        <div class="main__container">
            <h1 class="category-title">
                <?php echo e($date->date); ?>

            </h1>
        </div>
    </div>

    <div class="main__container">
        <div class="category__content mt-15">
            <?php $__currentLoopData = $date->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content__product">
                    <a href="<?php echo e(route('animeShow', $product->slug)); ?>" class="content__product-img">
                        <?php if(is_null($product->image)): ?>
                            <img src="<?php echo e(asset('img/products/no-image.png')); ?>">
                        <?php else: ?>
                            <img src="<?php echo e(asset($product->image)); ?>">
                        <?php endif; ?>
                        <div class="info">
                            <p style="font-size: 48px"><i class="fas fa-play"></i> </p>
                        </div>
                        <span class="is__new">
                           <i class="fas fa-eye"></i> <?php echo e($product->view_count); ?>

                        </span>
                    </a>

                    <a href="<?php echo e(route('animeShow', $product->slug)); ?>" class="content__product-name"><?php echo e($product->title); ?></a>

                    <ul class="content__product-menu">
                        <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('showCategory', $category->slug)); ?>" class="content__product-category"><?php echo e($category->title); ?></a> <a href="<?php echo e(route('anime.show', $product->slug)); ?>" class="content__product-category"></a><i class="fas fa-ellipsis-h" style="color: #434859"></i>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <!-- Stars -->
                    <ul class="content__product-stars">
                        <?php if($product->rating === 5): ?>
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
                        <?php elseif($product->rating === 4): ?>
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
                        <?php elseif($product->rating === 3): ?>
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
                        <?php elseif($product->rating === 2): ?>
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
                        <button class="btn-primary" style="font-family: Roboto">Возрасть: +<?php echo e($product->old); ?></button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/home/date/index.blade.php ENDPATH**/ ?>