<?php $__env->startSection('title', 'Войти'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="title center">Войти на сайт</h1>
    <form method="POST" action="<?php echo e(route('auth.signin')); ?>" class="form__control" novalidate>
        <?php echo csrf_field(); ?>
        <input type="email" class="input-dark<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" placeholder="Например, user@gmail.com" value="<?php echo e(Request::old('email')); ?>">
        <?php if($errors->has('email')): ?>
            <span class="danger-text">
                <?php echo e($errors->first('email')); ?>

            </span>
        <?php endif; ?>
        <input type="password" class="input-dark<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="минимум 6 символов" value="<?php echo e(Request::old('password')); ?>">
        <?php if($errors->has('password')): ?>
            <span class="danger-text">
                <?php echo e($errors->first('password')); ?>

            </span>
        <?php endif; ?>
        <div class="remember">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Запомнить меня</label>
        </div>
        <button class="btn-primary mt-15" type="submit">Войти</button>
        <a href="<?php echo e(route('auth.signup')); ?>" class="link-dark mt-5 center">Зарегистрироваться</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/auth/signin.blade.php ENDPATH**/ ?>