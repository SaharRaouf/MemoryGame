<?php $__env->startSection('content'); ?>
    <h1><?php echo e($messages->title); ?></h1>
    <article>
        <?php echo e($messages->body); ?>

    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>