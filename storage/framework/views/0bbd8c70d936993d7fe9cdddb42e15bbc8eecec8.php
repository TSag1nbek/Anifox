<?php $__env->startSection('title', 'Date Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('date.create')); ?>" class="btn btn-success">Create new date</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Year</th>
            <th scope="col">Anime Count</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($date->id); ?></th>
                <td><?php echo e($date->date); ?></td>
                <td><?php echo e($date->products->count()); ?></td>
                <td style="text-align: right;">
                    <a href="<?php echo e(route('date.show', $date)); ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo e(route('date.edit', $date)); ?>" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="<?php echo e(route('date.destroy', $date)); ?>" type="submit" style="display: contents" method="POST">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/date/index.blade.php ENDPATH**/ ?>