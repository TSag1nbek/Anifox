<?php $__env->startSection('title', 'Creating Anime'); ?>

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

            <form method="POST" action="<?php echo e(route('anime.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" value="<?php echo e(old('title')); ?>">
                </div>
                <div class="form-group">
                    <label for="product-original_title">Original Title</label>
                    <input type="text" name="original_title" class="form-control" id="product-original_title" value="<?php echo e(old('original_title')); ?>">
                </div>
                <div class="form-group">
                    <label for="product-genre">Categories</label>
                    <?php echo e(Form::select('category_id[]', $categories, null, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-genre">Types</label>
                    <?php echo e(Form::select('type_id[]', $types, null, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-genre">Date of issue</label>
                    <?php echo e(Form::select('date_id[]', $dates, 24, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-genre">Seasons</label>
                    <?php echo e(Form::select('season_id[]', $seasons, null, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="product-slug" value="<?php echo e(old('slug')); ?>">
                </div>
                <div class="form-group">
                    <label for="product-old">Old or Year</label>
                    <select class="form-control" id="product-old" name="old">
                        <option value="12">12</option>
                        <option value="16" selected>16</option>
                        <option value="18">18</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea name="description" class="form-control" id="product-description" style="height: 200px;"></textarea>
                </div>
                <div class="form-group">
                    <label for="product-is_recommend">Reccomendation</label>
                    <select class="form-control" id="product-is_recommend" name="is_recommend">
                        <option value="0" selected>No</option>
                        <option value="1" >Yes</option>
                    </select>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="rating">Rating</label>
                    <br>
                    <div class="form-check form-check-inline" id="rating">
                        <input class="form-check-input" type="radio" name="rating" id="rating1" value="1">
                        <label class="form-check-label" for="rating1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="rating2" value="2">
                        <label class="form-check-label" for="rating2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="rating3" value="3" checked>
                        <label class="form-check-label" for="rating3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="rating4" value="4">
                        <label class="form-check-label" for="rating4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="rating5" value="5">
                        <label class="form-check-label" for="rating5">5</label>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label>Image Anime</label>
                        <?php echo e(Form::file('image', null,['class' => 'form-control upload_image'])); ?>

                    </div>
                    <div class="form-group">
                        <label>Hide Image Anime</label>
                        <?php echo e(Form::file('hide_img', null,['class' => 'form-control upload_image'])); ?>

                        <div class="col-md-4">
                            <img id="hide_img" style="height: 200px;" src="<?php echo e(asset('img/products/no-image.png')); ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100">Add Anime</button>
                <br><br>
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
                    $('#image').attr('src', e.target.result);
                }

                reader.onload = function(e) {
                    $('#hide_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        // previewing of image before uploading
        $("input[name='image']").change(function() {
            console.log('change');
            readURL(this);
        });

        $("input[name='hide_img']").change(function() {
            console.log('change');
            readURL(this);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/anime/create.blade.php ENDPATH**/ ?>