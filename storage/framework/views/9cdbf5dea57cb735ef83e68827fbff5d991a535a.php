<?php $__env->startSection('title', 'Showing category id ' . $anime->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Types</th>
                    <th scope="col">Year</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo e($anime->id); ?></th>
                        <th><img src="<?php echo e(asset($anime->image)); ?>" height="200px"></th>
                        <td><?php echo e($anime->title); ?></td>
                        <td>
                            <?php $__currentLoopData = $anime->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('category.show', $category->id)); ?>"><?php echo e($category->title); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <?php $__currentLoopData = $anime->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('type.show', $type->id)); ?>"><?php echo e($type->title); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <?php $__currentLoopData = $anime->dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('date.show', $date->id)); ?>"><?php echo e($date->date); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Original Title</th>
                    <th scope="col">Likes</th>
                    <th scope="col">View Count</th>
                    <th scope="col">Seasons</th>
                    <th scope="col">Series</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row"><?php echo e($anime->old); ?></td>
                    <td><?php echo e($anime->original_title); ?></td>
                    <td><?php echo e($anime->likes->count()); ?></td>
                    <td>
                        <?php echo e($anime->view_count); ?>

                    </td>
                    <td>
                        <?php $__currentLoopData = $anime->seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('season.show', $season->id)); ?>"><?php echo e($anime->seasons->count()); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                        <?php $__currentLoopData = $anime->dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('date.show', $date->id)); ?>"><?php echo e($date->date); ?></a>
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
                    <td scope="row"><?php echo e($anime->description); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/anime/show.blade.php ENDPATH**/ ?>