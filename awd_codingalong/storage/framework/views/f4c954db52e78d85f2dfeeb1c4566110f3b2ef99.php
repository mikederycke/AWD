<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Zoekertje 1</h1>
            <p class="lead">Boardgames</p>
            <hr class="my-4">
            <p>Verzameling van allerhande boardgames</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Details</a>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Zoekertje 2</h1>
            <p class="lead">Gitaar</p>
            <hr class="my-4">
            <p>Les Paul Strat van 1965. Uitstekende staat!</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Details</a>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Zoekertje 3</h1>
            <p class="lead">Handboek ReactJS</p>
            <hr class="my-4">
            <p>Be a pro in React in NO TIME!</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Details</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>