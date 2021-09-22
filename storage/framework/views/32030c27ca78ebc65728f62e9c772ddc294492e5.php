<?php $__env->startSection('title', 'Showing episode - ' . $episode->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Seasons</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><?php echo e($episode->id); ?></th>
                    <td><?php echo e($episode->title); ?></td>
                    <td><?php echo e($episode->slug); ?></td>
                    <td>
                        <?php $__currentLoopData = $episode->seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('season.show', $season->id)); ?>"><?php echo e($season->title); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo e($episode->description); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/episode/show.blade.php ENDPATH**/ ?>