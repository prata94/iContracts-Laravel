

<?php $__env->startSection('content'); ?>
<h1 class="text-center my-5 font">Edit Budget</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header font"> Edit Budget </div>

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
                    <form action="<?php echo e(route('budget.update', $budget['id'])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="decimal " name="value" class="form-control" placeholder="Budget" value="<?php echo e($budget['value']); ?>">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success font">Confirm</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\final_project\resources\views/budget/edit.blade.php ENDPATH**/ ?>