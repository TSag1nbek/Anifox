<?php $__env->startSection('title', 'Профиль'); ?>

<?php $__env->startSection('content'); ?>
    <div class="category__container">
        <div class="main__container">

            <div class="profile__inner">
                <div class="profile-item">
                    <img src="img/default/avatar.jpg" class="profile__user-img">
                    <a href="<?php echo e(route('auth.signout')); ?>" class="profile__btn mt-15" style="background:red; text-align: center">Выйти</a>
                </div>
                <div class="profile-item ml-15">
                    <h1 class="profile__user-title">
                        <?php echo e(Auth::user()->getName()); ?>

                    </h1>
                    <ul class="profile__user-menu">
                        <li>
                            Дата регистрация: <a style="font-family: 'Roboto"><?php echo e(Auth::user()->getData()); ?></a>
                        </li>
                        <li>
                            E-mail:  <?php echo e(Auth::user()->getEmail()); ?>

                        </li>
                    </ul>
                </div>
            </div>
            <button class="profile__btn mt-15">Сохранить изменение</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/user/index.blade.php ENDPATH**/ ?>