<?php $__env->startSection('title', 'Showing season - ' . $season->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Anime</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><?php echo e($season->id); ?></th>
                <td><?php echo e($season->title); ?></td>
                <td><?php echo e($season->slug); ?></td>
                <td>
                    <?php $__currentLoopData = $season->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('anime.show', $product->id)); ?>"><?php echo e($product->title); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/season/show.blade.php ENDPATH**/ ?>