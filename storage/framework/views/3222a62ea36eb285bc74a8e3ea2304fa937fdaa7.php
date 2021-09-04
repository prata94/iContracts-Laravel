

<?php $__env->startSection('content'); ?>
<h1 class="text-center my-5 text-light font"><?php echo e($budget['value']); ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header font">Budget</div>
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>

                    </div>
                <?php endif; ?>
                <div class="card-body"> <span class="font"></span> <?php echo e($budget['value']); ?></div>
                
            </div>
            <div class="container d-flex">
            <a href="<?php echo e(route('budget.edit', $budget['id'])); ?>" class="btn btn-info btn-sm my-2 font">Edit</a>
            </div>
        </div>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\iContracts\resources\views/budget/show.blade.php ENDPATH**/ ?>