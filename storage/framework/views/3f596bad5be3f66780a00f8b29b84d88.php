<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">

            <h2><?php echo e($listings->title); ?></h2>

            <p><?php echo e($listings->text); ?></p>

            <img src="<?php echo e(asset('/storage'.$listings->image)); ?>" alt="no image">

            <form action="<?php echo e(route('listings.index')); ?>">
                <button type="submit" class="btn btn-primary">Back</button>
            </form>

        </div>
        <div class="col"></div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel_test_poject/test_project/resources/views/show.blade.php ENDPATH**/ ?>