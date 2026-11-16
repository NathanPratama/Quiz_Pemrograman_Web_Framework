<?php $__env->startSection('title', 'Welcome'); ?>

<?php $__env->startSection('content'); ?>

<div class="container" style="margin-top: 100px;">

    <h1><?php echo e($welcome); ?></h1>

    <p>Selamat datang di website pribadi saya.</p>

    <p>Website ini dibuat menggunakan Laravel Blade.</p>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Nathanael\Documents\Laravel\belajar-laravel\laravel-bersih\resources\views/pages/welcome.blade.php ENDPATH**/ ?>