<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <h1>This is the about page</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>