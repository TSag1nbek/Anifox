<?php $__env->startSection('title', 'Showing category id ' . $series->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h3>ID:<?php echo e($series->id); ?> <p><?php echo e($series->title); ?></p></h3>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/anime/show.blade.php ENDPATH**/ ?>
