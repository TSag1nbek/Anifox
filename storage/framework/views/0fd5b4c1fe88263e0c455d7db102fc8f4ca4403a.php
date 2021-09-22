<?php $__env->startSection('title', 'Anime Admin'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('anime.create')); ?>" class="btn btn-success mb-3">Add new anime</a>

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
            <th scope="col">Recommendation</th>
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
                    <?php if($anime->is_recommend == 1): ?>
                        Да
                    <?php else: ?>
                        Нет
                    <?php endif; ?>
                </td>
                <td style="text-align: right; display: flex">
                    <a href="<?php echo e(route('anime.show', $anime)); ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo e(route('anime.edit', $anime)); ?>" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form action="<?php echo e(route('anime.destroy', $anime)); ?>" type="submit" style="display: contents" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($animes->links("pagination::bootstrap-4")); ?>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/anime/recommend.blade.php ENDPATH**/ ?>