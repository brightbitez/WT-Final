<?php $__env->startSection('content'); ?>
        <h1>about me</h1>
        <p>I am a web amateur</p>
        <p>Name: <?php echo e($name); ?></p>
        <p>Address: <?php echo e($address); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\laravel\resources\views/adminhome.blade.php */ ?>