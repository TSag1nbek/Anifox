<?php $__env->startSection('title', 'Showing date - ' . $date->date); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Product Count</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><?php echo e($date->id); ?></th>
                    <td><?php echo e($date->date); ?></td>
                    <td><?php echo e($date->products->count()); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/date/show.blade.php ENDPATH**/ ?>