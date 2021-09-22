<?php $__env->startSection('title', 'Season Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('slider.create')); ?>" class="btn btn-success">Create new slider</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Rating</th>
            <th scope="col">Anime</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($slider->id); ?></th>
                <td><img src="<?php echo e(asset($slider->image)); ?>" height="100px"></td>
                <td><?php echo e($slider->rating); ?></td>
                <td>
                    <?php $__currentLoopData = $slider->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('anime.show', $product->id)); ?>"><?php echo e($product->title); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td style="text-align: right;">
                    <a href="<?php echo e(route('slider.show', $slider)); ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo e(route('slider.edit', $slider)); ?>" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="<?php echo e(route('slider.destroy', $slider)); ?>" type="submit" style="display: contents" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/slider/index.blade.php ENDPATH**/ ?>