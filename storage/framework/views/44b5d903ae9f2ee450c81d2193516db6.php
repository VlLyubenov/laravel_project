<?php $__env->startSection('content'); ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($listing->id); ?></td>
                    <td><a href="<?php echo e(route('listings.show', $listing->id)); ?>"><?php echo e($listing->title); ?></a></td>
                    <td><?php echo e($listing->created_at); ?></td>
                    <td><?php echo e($listing->updated_at); ?></td>
                    <td>
                        <form action="<?php echo e(route('listings.edit', $listing->id)); ?>">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </from>
                    </td>
                    <td>
                        <form action="<?php echo e(route('listings.destroy', $listing->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel_test_poject/test_project/resources/views/index.blade.php ENDPATH**/ ?>