<?php $__env->startSection('title', 'Edeting ' . $anime->title); ?>

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

            <form method="POST" action="<?php echo e(route('anime.update', $anime)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" value="<?php echo e($anime->title); ?>">
                </div>
                <div class="form-group">
                    <label for="product-original_title">Original Title</label>
                    <input type="text" name="original_title" class="form-control" id="product-title" value="<?php echo e($anime->original_title); ?>">
                </div>
                <div class="form-group">
                    <label for="product-genre">Categories</label>
                    <?php echo e(Form::select('category_id[]', $categories, $anime->categories, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-genre">Types</label>
                    <?php echo e(Form::select('type_id[]', $types, $anime->types, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-genre">Date of issue</label>
                    <?php echo e(Form::select('date_id[]', $dates, $anime->dates, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-genre">Seasons</label>
                    <?php echo e(Form::select('season_id[]', $seasons, $anime->seasons, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="product-slug" value="<?php echo e($anime->slug); ?>">
                </div>
                <div class="form-group">
                    <label for="product-quality">Old or Year</label>
                    <select class="form-control" id="product-quality" name="old">
                        <option value="<?php echo e($anime->old); ?>"><?php echo e($anime->old); ?></option>
                        <option value="12">12</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea name="description" class="form-control" id="product-description" style="height: 200px;"><?php echo e($anime->description); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="product-is_recommend">Reccomendation</label>
                    <select class="form-control" id="product-is_recommend" name="is_recommend">
                        <?php if($anime->is_recommend == 1): ?>
                            <option value="<?php echo e($anime->is_recommend); ?>">Да</option>
                        <?php else: ?>
                            <option value="<?php echo e($anime->is_recommend); ?>">Нет</option>
                        <?php endif; ?>
                        <option value="0">Нет</option>
                        <option value="1">Да</option>
                    </select>
                </div>

                <div class="form-group mt-3 mb-3">
                    <label for="rating">Rating | Checked <?php echo e($anime->rating); ?></label>
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
                        <input class="form-check-input" type="radio" name="rating" id="rating3" value="3">
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
                        <label>Image</label>
                        <?php echo e(Form::file('image', null,['class' => 'form-control upload_image'])); ?>

                        <div class="col-md-4">
                            <?php if(is_null($anime->image)): ?>
                                <img src="<?php echo e(asset('img/products/no-image.png')); ?>" class="w-25">
                            <?php else: ?>
                                <img id="holder" style="height: 100px;" src="<?php echo e(asset($anime->image)); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Anime Hide Image</label>
                        <?php echo e(Form::file('hide_img', null,['class' => 'form-control upload_image'])); ?>

                        <div class="col-md-4">
                            <?php if(is_null($anime->hide_img)): ?>
                                <img src="<?php echo e(asset('img/products/no-image.png')); ?>" class="w-25">
                            <?php else: ?>
                                <img id="holder" style="height: 100px;" src="<?php echo e(asset($anime->hide_img)); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update Product</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/play/anifox/resources/views/admin/anime/edit.blade.php ENDPATH**/ ?>