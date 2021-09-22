<?php $__env->startSection('title', 'Anime Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>

    <div class="row w-100 col-md-12 d-flex">
        <a href="<?php echo e(route('anime.create')); ?>" class="btn btn-success mb-3">Add new anime</a>

        <div class="dropdown show ml-2">
            <a class="btn btn-secondary dropdown-toggle" href="<?php echo e(route('anime.index')); ?>" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                All
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?php echo e(route('anime.index')); ?>">All</a>
                <a class="dropdown-item" href=<?php echo e(route('adminAnimeIsRecommend')); ?>#">Recommendation</a>
            </div>
        </div>
    </div>

    <form method="get" action="<?php echo e(route('searchAnime')); ?>" class="form-inline my-2 my-lg-0 d-flex">
        <input name="query" id="query" value="<?php echo e(request()->input('query')); ?>" class="form-control mr-sm-2 w-50" type="search" placeholder="Наруто" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Categories</th>
            <th scope="col">Types</th>
            <th scope="col">Year</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $animes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($anime->id); ?></th>
                <th><img src="<?php echo e(asset($anime->image)); ?>" height="100px"></th>
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
                <td style="text-align: right; display: flex">
                    <a href="<?php echo e(route('anime.show', $anime->id)); ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo e(route('anime.edit', $anime)); ?>" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="<?php echo e(route('anime.destroy', $anime)); ?>" type="submit" style="display: contents" method="POST">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/anime/index.blade.php ENDPATH**/ ?>