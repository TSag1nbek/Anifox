<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Register And Login Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php if(session()->get('info')): ?>
        <div class="info">
            <?php echo e(session()->get('info')); ?>

        </div>
    <?php endif; ?>

<div class="wrapper">
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
</body>
</html>
<?php /**PATH /home/saginbek/play/anifox/resources/views/layouts/auth.blade.php ENDPATH**/ ?>