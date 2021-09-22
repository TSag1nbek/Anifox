<?php $__env->startSection('title', $anime->title); ?>

<?php $__env->startSection('content'); ?>
<!-- Episode Show -->
<div class="product-show">
    <div class="show__product-container">
        <div class="product__hide-navs">
            <div class="bg__shadow"></div>
            <img src="<?php echo e(asset($anime->hide_img)); ?>">
        </div>

        <div class="product__inner container">
            <div class="product__navs">
                <img src="<?php echo e(asset($anime->image)); ?>" class="product__img">

                <div class="product__navs-item">
                    <i class="fas fa-eye"></i>
                    <?php echo e($anime->view_count); ?>

                </div>

                <div class="product__navs-item">
                    <i class="fas fa-heart"></i>
                    <?php echo e($anime->likes->count()); ?>

                </div>
            </div>

            <div class="product__body">
                <div class="product__body-container">

                    <div class="product__container-head">
                        <img src="<?php echo e(asset($anime->image)); ?>" alt="" class="product__img-mobile">
                    </div>

                    <div class="product__container-body">
                        <div class="product__body-inner">
                            <h1 class="product-title"><?php echo e($anime->title); ?></h1>
                        </div>

                        <div class="product__body-content">
                            <ul class="product__menu">
                                <li>
                                    Жанры:
                                    <?php $__currentLoopData = $anime->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('showCategory', $category->slug)); ?>"><?php echo e($category->title); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </li>
                                <li>
                                    Типы:
                                    <?php $__currentLoopData = $anime->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('showType', $type->slug)); ?>"><?php echo e($type->title); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </li>
                                <li>
                                    Годы выпуска:
                                    <?php $__currentLoopData = $anime->dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('showDate', $date->date)); ?>"><?php echo e($date->date); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </li>
                            </ul>
                        </div>

                        <div class="product__body-inner">
                            <ul class="product__menu">
                                <li>
                                    Возрастной рейтинг:  <div class="product__quality">+<?php echo e($anime->old); ?></div>
                                </li>
                                <li>
                                    Оригинальное название: <?php echo e($anime->original_title); ?>

                                </li>
                                <li>
                                    <?php if($anime->user !== Auth::user() ): ?>
                                        <a href="<?php echo e(route('episode.like', ['statusId' => $anime->id])); ?>">Поставить лайк</a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product__body-container only__mobile">
                    <div class="product__container-head">
                        <button class="btn__squard"><i class="fas fa-eye"></i><?php echo e($anime->view_count); ?></button>
                    </div>
                    <div class="product__container-body float-right">
                        <button class="btn__squard"><i class="fas fa-heart"></i><?php echo e($anime->likes->count()); ?></button>
                    </div>
                </div>

                <div class="product__body-content">
                    <div class="product__description">
                        <p class="product-show__txt">
                            <?php echo e($anime->description); ?>

                        </p>
                    </div>
                </div>

                <!-- Player -->
                <div class="product__series">
                    <?php $__currentLoopData = $anime->seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product__season">
                        <h1 class="product__season-title"><?php echo e($season->title); ?></h1>
                        <div class="product__season-series">
                            <?php $__currentLoopData = $season->episodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $episode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('showEpisode', [$anime->slug, $season->slug, $episode->slug])); ?>" class="product__season-link"><?php echo e($episode->title); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="product__body-inner">
                <div class="title m-none">
                    <h1>Комментарии к фильму</h1>
                    <i class="fas fa-comment-alt"></i>
                </div>
            </div>
            <?php if(\Auth::check()): ?>
                <form method="POST" action="<?php echo e(route('comments.add')); ?>" class="comments">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($anime->id); ?>" name="product_id">
                    <textarea placeholder="Коментарии" class="comment__input" name="comment"></textarea>
                    <button class="comment__btn" type="submit">Написать</button>
                </form>
            <?php else: ?>
                <p style="font-size:18px;color:#e3e3e3;margin-top:10px;margin-bottom: 15px">Чтобы написать комментарий пожалуйста
                    <a href="<?php echo e(route('auth.signup')); ?>" style="color:#f9f9f9">зарегистрируйтесь</a>
                </p>
            <?php endif; ?>
        </div>
        <div class="container">
            <!-- Comments -->
            <div class="product__commnets">
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product__comment-item">
                    <div class="comment__navs">
                        <?php if(is_null(_user($comment->user_id)->avatar)): ?>
                        <img src="<?php echo e(asset('img/default/avatar.jpg')); ?>" alt="" class="comment__img">
                        <?php else: ?>
                        <img src="<?php echo e(asset('image/avatar/' . _user($comment->user_id)->avatar)); ?>" class="comment__img">
                        <?php endif; ?>
                    </div>
                    <div class="comment__body">
                        <div class="product__flex">
                            <h1 class="comment__username"><?php echo e(_user($comment->user_id)->username); ?></h1>
                            <p class="product__time"><?php echo e($comment->created_at->diffForHumans()); ?></p>
                        </div>
                        <p class="comment__txt">
                            <?php echo e($comment->comment); ?>

                        </p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php echo e($comments->links("pagination::bootstrap-4")); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/home/anime/show.blade.php ENDPATH**/ ?>