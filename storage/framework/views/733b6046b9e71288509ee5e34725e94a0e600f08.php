<?php $__env->startSection('title', $episode->title . ' ANIFOX.RU'); ?>

<?php $__env->startSection('content'); ?>
    <div class="product-show show__product-container">
        <div class="container">
            <h1 class="product-title">
                <?php $__currentLoopData = $episode->seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($season->title); ?> <?php echo e($episode->title); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h1>
            <ul class="product__menu">
                <li>
                    <?php echo e($episode->description); ?>

                </li>
            </ul>

            <iframe class="player" src="<?php echo e($episode->video_code); ?>" width="607" height="360" frameborder="0" AllowFullScreen allow="autoplay *; fullscreen *"></iframe>

            <div class="global__flex">
                <div></div>
                <?php $__currentLoopData = $season->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('animeShow', $product->slug)); ?>" class="global__btn">Список серий</a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/home/episode/index.blade.php ENDPATH**/ ?>