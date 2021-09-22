<?php $__env->startSection('title', 'Creating Type'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('type.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" value="<?php echo e(old('title')); ?>">

                    <div class="form-group">
                        <label for="product-slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="product-slug" value="<?php echo e(old('slug')); ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Create Type</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/type/create.blade.php ENDPATH**/ ?>