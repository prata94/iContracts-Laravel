

<?php $__env->startSection('content'); ?>
<h1 class="text-center my-5 text-light font"><?php echo e($investment['investment_name']); ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header font">Investment details</div>
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>

                    </div>
                <?php endif; ?>
                <div class="card-body"> <span class="font">Category:</span> <?php echo e($investment['investment_type']); ?></div>
                <div class="card-body"> <span class="font">Capital Invested:</span> <?php echo e($investment['capital_invested']); ?></div>
                <div class="card-body"> <span class="font">Expected Return:</span> <?php echo e($investment['expected_return']); ?>%</div>
                <div class="card-body"> <span class="font">Date:</span> <?php echo e($investment['date_of_investment']); ?></div>
                <div class="card-body"><?php echo e($investment['description']); ?></div>
            </div>
            <div class="container d-flex">
            <a href="<?php echo e(route('investments.edit', $investment['id'])); ?>" class="btn btn-primary btn-sm my-2 font">Edit</a>
            <form action="<?php echo e(route('investments.destroy', $investment['id'])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button type="submit" class="btn btn-danger my-2 btn-sm font mx-1">Delete</button>
            </form>
            <!-- <a href="<?php echo e(route('investments.destroy', $investment['id'])); ?>" class="btn btn-info btn-danger my-2 btn-sm">Delete</a> -->
            </div>
        </div>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\final_project\resources\views/investments/show.blade.php ENDPATH**/ ?>