<?php $__env->startSection('content'); ?>
    <h1>ALL_NEWS</h1>
    <p>NO NEWS UPDATED</p>
    <?php $__currentLoopData = $newsArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($news['title']); ?></h5>
                <p class="card-text"><?php echo e($news['content']); ?></p>
                <a href="#" class="btn btn-primary"></a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\laravel\resources\views/news/all-news.blade.php */ ?>