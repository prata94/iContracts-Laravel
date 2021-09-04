

<?php $__env->startSection('content'); ?>
<!-- <h1 class="text-center my-5 font bg-light text-dark"><?php echo e($username); ?></h1> -->
<h1 class="text-center my-5 bg-light text-dark">
<span class="font"><?php echo e($username); ?></br></span>
<span class="h6 font-weight-bold">Remaining Budget: </br></span><div class=" container w-25 text-dark"><?php echo e($final_budget . " €"); ?></div></h1>


<div class="row justify-content-center m-5">

<div class="col-md-4 mb-3">


    <!-- BUDGET AREA -->

    <div class="col-md-12 mb-3">
        <div class="card card-default h-100">
            <div class="card card-header text-center font h5"> Starting Budget</div>
            <div class="card-body d-flex flex-column text-center">
                <div class="my-3 h1"><?php echo e($budget['value'] . " €"); ?></div>

            <div class="text-center mt-auto">
                <a href="<?php echo e(route('budget.edit',$budget['id'])); ?>" class="btn btn-primary btn-smmr-2 font">Edit Budget</a>
            </div>
            </div>
        </div>
    </div> 

    <!-- SEARCH AREA -->

    <div class="col-md-12">
        <div class="card card-default">
            <div class="card card-header font">Search</div>
            <div class="card-body">
                <form action="">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control mr-2" placeholder="Search" />
                        <button class="btn btn-primary font btn-sm" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>


<!-- INVESTMENTS AREA -->

        <div class="col-md-8 mb-3">
            <div class="card card-default h-100">
                <div class="card card-header font text-center h5">My Investments</div>
                <div class="card-body d-flex flex-column">

                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                    <?php endif; ?>

                    <ul class="list-group">
                        <?php $__currentLoopData = $investments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <span class="font"><?php echo e($investment['investment_name']); ?></span> - <span class="small"><?php echo e($investment['investment_type']); ?></span>
                            <a href="<?php echo e(route('investments.show', $investment['id'])); ?>" class="btn btn-primary btn-sm float-right mr-2 font">View</a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                    </ul>

                    <div class="row justify-content-center"><?php echo e($investments->appends(request()->query())->links()); ?></div>

                    <div class="text-center mt-auto">
                        
                        <a class="btn btn-primary font w-100 mt-3" href="<?php echo e(route('investments.create')); ?>">
                        Create Investment
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\final_project\resources\views/investments/index.blade.php ENDPATH**/ ?>