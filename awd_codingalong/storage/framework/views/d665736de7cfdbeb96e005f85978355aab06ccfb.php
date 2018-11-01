<?php $__env->startSection('content'); ?>
    <div class="container">
        <!--controle op sessie data-->
        <?php if(session('forminput')): ?>
            <div class="alert alert-success" role="alert">
                Zoekertje aangemaakt met titel: <?php echo e(session('forminput')); ?>

            </div>
        <?php endif; ?>

        <div class="jumbotron">
            <h1 class="display-4">Zoekertje 4</h1>
            <p class="lead">Elektrische fiets</p>
            <hr class="my-4">
            <p>Opgedreven tot 70km/u</p>
            <a class="btn btn-primary btn-lg" href="<?php echo e(route('admin.create')); ?>" role="button">Create</a>
            <a class="btn btn-info btn-lg" href="<?php echo e(route('admin.edit')); ?>" role="button">Edit</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>