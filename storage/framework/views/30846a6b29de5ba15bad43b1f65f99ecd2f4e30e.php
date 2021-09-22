<?php $__env->startSection('title', 'Creating Slider'); ?>

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

            <form method="POST" action="<?php echo e(route('slider.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="slider-image">Image</label>
                    <?php echo e(Form::file('image', null,['class' => 'form-control upload_image'])); ?>

                    <div class="col-md-4">
                        <img id="slider-image" style="width: 100px;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group">
                        <label for="product-rating">Example select</label>
                        <select class="form-control" id="product-rating" name="rating">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="category-product_id">Продукт</label>
                    <?php echo e(Form::select('anime_id[]', $anime, null, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>

                <button type="submit" class="btn btn-success">Create Slider</button>
                <?php echo e(Form::close()); ?>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#slider-image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        // previewing of image before uploading
        $("input[name='image']").change(function() {
            console.log('change');
            readURL(this);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/slider/create.blade.php ENDPATH**/ ?>