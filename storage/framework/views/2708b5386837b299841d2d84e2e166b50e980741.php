

<?php $__env->startSection('content'); ?>
<h1 class="text-center my-5 font">Create investments</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header font"> Create new investments </div>

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
                <form action="<?php echo e(route('investments.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" name="investment_name" class="form-control" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="investment_type" class="form-control" placeholder="Category" />
                    </div>
                    <div class="form-group">
                        <input type="decimal" name="capital_invested" class="form-control" placeholder="Capital Invested" />
                    </div>
                    <div class="form-group">
                        <input type="decimal" name="expected_return" class="form-control" placeholder="Expected Return(%)" />
                    </div>
                    <div class="form-group">
                        <input type="date" name="date_of_investment" class="form-control" placeholder="Date of investment" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success font">Create Investment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\final_project\resources\views/investments/create.blade.php ENDPATH**/ ?>