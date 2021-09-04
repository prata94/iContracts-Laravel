

<?php $__env->startSection('content'); ?>
<h1 class="text-center my-5">Update Investment</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header"> Update investment </div>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="card-body">
                    <form action="<?php echo e(route('investments.update', $investment['id'])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <input type="text" name="investment_name" class="form-control" placeholder="Name" value="<?php echo e($investment['investment_name']); ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" name="investment_type" class="form-control" placeholder="Category" value="<?php echo e($investment['investment_type']); ?>">
                            </div>
                            <div class="form-group">
                                <input type="decimal" name="capital_invested" class="form-control" placeholder="Capital invested" value="<?php echo e($investment['capital_invested']); ?>">
                            </div>
                            <div class="form-group">
                                <input type="decimal" name="expected_return" class="form-control" placeholder="Expected return(%)" value="<?php echo e($investment['expected_return']); ?>">
                            </div>
                            <div class="form-group">
                                <input type="date" name="date_of_investment" class="form-control" placeholder="Date" value="<?php echo e($investment['date_of_investment']); ?>">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"><?php echo e($investment['description']); ?></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\final_project\resources\views/investments/edit.blade.php ENDPATH**/ ?>