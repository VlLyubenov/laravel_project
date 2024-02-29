<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                    <h3>Create a listing</h3>
                    <?php if(session()->has('listing_created')): ?>
                        <p class="alert alert-success">Listing created</p>
                    <?php endif; ?>
                    <form action="<?php echo e(route('listings.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            </div>
                        <div class="form-group">
                            <label for="text">Description</label>
                            <textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel_test_poject/test_project/resources/views/add.blade.php ENDPATH**/ ?>