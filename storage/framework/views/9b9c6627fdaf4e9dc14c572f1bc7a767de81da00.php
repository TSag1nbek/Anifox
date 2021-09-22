<?php $__env->startSection('title', 'Episode Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('episode.create')); ?>" class="btn btn-success">Create new product</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($product->id); ?></th>
            <td><?php echo e($product->title); ?></td>
            <td><?php echo e($product->description); ?></td>
            <td style="text-align: right;">
                <a href="<?php echo e(route('episode.show', $product)); ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                <a href="<?php echo e(route('episode.edit', $product)); ?>" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                <form action="<?php echo e(route('episode.destroy', $product)); ?>" type="submit" style="display: contents" method="POST">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/episode/index.blade.php ENDPATH**/ ?>
