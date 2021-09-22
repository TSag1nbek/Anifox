<?php $__env->startSection('title', 'Episodes Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('episode.create')); ?>" class="btn btn-success">Add new episode</a>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Season</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $episodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $episode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($episode->id); ?></th>
            <td><?php echo e($episode->title); ?></td>
            <td><?php echo e($episode->slug); ?></td>
            <td>
                <?php $__currentLoopData = $episode->seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('season.show', $season->id)); ?>"><?php echo e($season->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <?php echo e($episode->description); ?>

            </td>
            <td style="text-align: right;">
                <a href="<?php echo e(route('episode.show', $episode)); ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                <a href="<?php echo e(route('episode.edit', $episode)); ?>" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                <form action="<?php echo e(route('episode.destroy', $episode)); ?>" type="submit" style="display: contents" method="POST">
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