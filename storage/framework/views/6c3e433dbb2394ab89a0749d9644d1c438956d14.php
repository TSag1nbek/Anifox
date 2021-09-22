<?php $__env->startSection('title', 'Showing slide id ' . $slider->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Anime</th>
                    <th scope="col">Image</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><?php echo e($slider->id); ?></th>
                    <td><?php echo e($slider->rating); ?></td>
                    <td>
                        <?php $__currentLoopData = $slider->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('anime.show', $product->id)); ?>"><?php echo e($product->title); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                        <img width="200px" src="<?php echo e(asset($slider->image)); ?>" alt="">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/slider/show.blade.php ENDPATH**/ ?>