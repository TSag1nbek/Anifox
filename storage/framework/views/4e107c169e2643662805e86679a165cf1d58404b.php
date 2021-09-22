<?php $__env->startSection('title', 'Статистика сайта'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Аниме</h5>
                    <p class="card-text"><?php echo e($anime_count); ?></p>
                    <a href="<?php echo e(route('anime.index')); ?>" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Жанры</h5>
                    <p class="card-text"><?php echo e($category_count); ?></p>
                    <a href="<?php echo e(route('category.index')); ?>" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Типы</h5>
                    <p class="card-text"><?php echo e($type_count); ?></p>
                    <a href="<?php echo e(route('type.index')); ?>" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Годы</h5>
                    <p class="card-text"><?php echo e($date_count); ?></p>
                    <a href="<?php echo e(route('date.index')); ?>" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Слайды</h5>
                    <p class="card-text"><?php echo e($slider_count); ?></p>
                    <a href="<?php echo e(route('slider.index')); ?>" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Сезоны</h5>
                    <p class="card-text"><?php echo e($season_count); ?></p>
                    <a href="<?php echo e(route('season.index')); ?>" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Епизоды</h5>
                    <p class="card-text"><?php echo e($episode_count); ?></p>
                    <a href="<?php echo e(route('episode.index')); ?>" class="btn btn-success">Перейти</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/index.blade.php ENDPATH**/ ?>