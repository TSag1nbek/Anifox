<?php $__env->startSection('title', ' ANIFOX.RU'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Product Show -->
    <div class="product-show">
        <div class="show__product-container">

            <div class="product__inner container">
                <div class="product__navs">
                    <?php $__currentLoopData = $season->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset($product->image)); ?>" class="product__img">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="product__body">
                    <div class="product__body-container">

                        <div class="product__container-head">
                            <?php $__currentLoopData = $season->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset($product->image)); ?>" alt="" class="product__img-mobile">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="product__container-body">
                            <div class="product__body-inner">
                                <?php $__currentLoopData = $season->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h1 class="product-title"><?php echo e($product->title); ?> - <?php echo e($season->title); ?></h1>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="product__body-inner">
                                <ul class="product__menu">
                                    <li>
                                        Оригинальное название:
                                        <?php echo e($product->original_title); ?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="product__season-series">
                        <?php $__currentLoopData = $season->episodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $episode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('showEpisode', ['anifox', $season->slug, $episode->slug])); ?>" class="product__season-link"><?php echo e($episode->title); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/home/season/index.blade.php ENDPATH**/ ?>