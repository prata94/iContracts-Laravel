

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e($budget['budget']); ?>

<!-- <h1 class="text-center my-5 font bg-light text-dark">Investments</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card card-header font">My Investments</div>
                <div class="card-body">

                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                    <?php endif; ?>

                    <span class="font"><?php echo e($investment['investment_name']); ?></span>

                    <a href="<?php echo e(route('investments.show', $investment['id'])); ?>" class="btn btn-primary btn-sm float-right mr-2 font">View</a>
                </div>
            </div>
        </div>
    </div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\final_project\resources\views/budget/index.blade.php ENDPATH**/ ?>