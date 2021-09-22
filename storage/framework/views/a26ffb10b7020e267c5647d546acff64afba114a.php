<?php $__env->startSection('title', 'Edeting ' . $product->id); ?>

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

            <form method="POST" action="<?php echo e(route('episode.update', $product)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" placeholder="Naruto" value="<?php echo e($product->title); ?>">
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea name="description" class="form-control" id="product-description" rows="3"><?php echo e($product->description); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="product-video_code">Video Code</label>
                    <input type="text" name="video_code" class="form-control" id="product-video_code" value="<?php echo e($product->video_code); ?>">
                </div>
                <div class="form-group">
                    <label for="product-previous">Link Previous Series</label>
                    <input type="text" name="previous" class="form-control" id="product-previous" value="<?php echo e($product->previous); ?>">
                </div>
                <div class="form-group">
                    <label for="product-next">Link Next Series</label>
                    <input type="text" name="next" class="form-control" id="product-next" value="<?php echo e($product->next); ?>">
                </div>
                <button type="submit" class="btn btn-success">Update Product</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/episode/edit.blade.php ENDPATH**/ ?>
