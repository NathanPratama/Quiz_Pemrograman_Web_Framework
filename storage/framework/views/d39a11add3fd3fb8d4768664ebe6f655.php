


<?php $__env->startSection('title', 'Data Diri'); ?>

<?php $__env->startSection('content'); ?>

<div class="container" style="max-width: 800px;">

    <h1>Data Diri</h1>

    <p>Halo! Perkenalkan, berikut adalah deskripsi data diri saya.</p>

    <?php
        $nama = "Nathanael";
        $umur = 19;
        $jurusan = "Informatika";
        $kampus = "INSTIKI";

        $hobi = [
            "Bermain Game",
            "Mendengarkan Musik",
            "Belajar Programming",
            "Badminton"
        ];
    ?>

    <h3>Informasi Pribadi</h3>

    <p>Nama: <?php echo e($nama); ?></p>
    <p>Umur: <?php echo e($umur); ?> Tahun</p>
    <p>Jurusan: <?php echo e($jurusan); ?></p>
    <p>Kampus: <?php echo e($kampus); ?></p>

    <hr>

    <h3>Daftar Hobi</h3>

    <div style="display: inline-block; text-align: left;">

        <?php for($i = 0; $i < count($hobi); $i++): ?>
            <p><?php echo e($i + 1); ?>. <?php echo e($hobi[$i]); ?></p>
        <?php endfor; ?>

    </div>

    <hr>

    <h3>Daftar Hobi</h3>

    <div style="display: inline-block; text-align: left;">

        <?php
            $i = 0;
        ?>

        <?php while($i < count($hobi)): ?>
            <p><?php echo e($i + 1); ?>. <?php echo e($hobi[$i]); ?></p>

            <?php
                $i++;
            ?>
        <?php endwhile; ?>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Nathanael\Documents\Laravel\belajar-laravel\laravel-bersih\resources\views/pages/biodata.blade.php ENDPATH**/ ?>