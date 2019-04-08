<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e('/css/app.css'); ?>">
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('layouts._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>

    <footer>
        By @brightbite
    </footer>
</body>
</html>
<?php /* C:\laragon\www\laravel\resources\views/layouts/default.blade.php */ ?>