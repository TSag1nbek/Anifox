<?php $__env->startSection('title', 'Showing category id ' . $category->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Product Count</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><?php echo e($category->id); ?></th>
                    <td><?php echo e($category->title); ?></td>
                    <td><?php echo e($category->slug); ?></td>
                    <td><?php echo e($category->products->count()); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/category/show.blade.php ENDPATH**/ ?>