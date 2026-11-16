


<?php $__env->startSection('title', 'Galeri Foto'); ?>

<?php $__env->startSection('content'); ?>

<div class="container" style="max-width: 1400px;">

    <h1>Galeri Foto</h1>

    <p>Berikut adalah kumpulan foto saya.</p>

    <?php
        $foto = [
            'foto1.jpg',
            'foto2.jpg',
            'foto3.jpg',
            'foto4.jpg'
        ];
    ?>

    <div style="
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        width: 100%;
        margin-top: 35px;
    ">

        <?php $__currentLoopData = $foto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gambar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div style="
                width: 100%;
                aspect-ratio: 1 / 1;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            ">

                <img
                    src="<?php echo e(asset('images/' . $gambar)); ?>"
                    alt="Foto Galeri"
                    style="
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    "
                >

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Nathanael\Documents\Laravel\belajar-laravel\laravel-bersih\resources\views/pages/galeri.blade.php ENDPATH**/ ?>