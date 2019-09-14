@extends('app')
@section('content')
    <h1>Messages</h1>
    <hr/>
    @foreach($messages as $message): ?>
         <article>
             <h2>
                 <a href="<?php echo e(url('/message',$message->id)); ?>"><?php echo e($message->title); ?></a>
             </h2>
             <div class="body"><?php echo e($message->body); ?></div>
        </article>
    <?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    @stop