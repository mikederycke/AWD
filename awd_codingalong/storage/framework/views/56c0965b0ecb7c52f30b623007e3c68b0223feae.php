<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1>This is the item page</h1>
        <hr>
        <p>Titel: <?php echo e($nieuweVariabele['titel']); ?></p>
        <br>
        <p>Staat: <?php echo e($nieuweVariabele['staat']); ?></p>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>