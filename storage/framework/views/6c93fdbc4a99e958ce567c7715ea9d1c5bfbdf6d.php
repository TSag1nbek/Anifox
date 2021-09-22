<?php $__env->startSection('title', 'Showing episode id ' . $product->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h3>ID:<?php echo e($product->id); ?> / <?php echo e($product->title); ?></h3>
            <p>Desc: <?php echo e($product->description); ?></p>
            <h5>Video Code: <?php echo e($product->video_code); ?></h5>
            <p>
                Прев:
                <a href="#"><?php echo e($product->previous); ?></a>
            </p>
            <p>
                След:
                <a href="#"><?php echo e($product->next); ?></a>
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/episode/show.blade.php ENDPATH**/ ?>
