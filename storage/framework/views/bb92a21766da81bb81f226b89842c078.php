
<header style="
    background: #1e293b;
    padding: 25px;
    text-align: center;
">
    <h2 style="color: white; margin: 0 0 20px 0;">
        My Website
    </h2>

    <nav style="
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
    ">
        <a href="/"
           style="
               color: <?php echo e(request()->is('/') ? '#38bdf8' : 'white'); ?>;
               font-weight: <?php echo e(request()->is('/') ? 'bold' : 'normal'); ?>;
           ">
            Home
        </a>

        <a href="/biodata"
           style="
               color: <?php echo e(request()->is('biodata') ? '#38bdf8' : 'white'); ?>;
               font-weight: <?php echo e(request()->is('biodata') ? 'bold' : 'normal'); ?>;
           ">
            Data Diri
        </a>

        <a href="/galeri"
           style="
               color: <?php echo e(request()->is('galeri') ? '#38bdf8' : 'white'); ?>;
               font-weight: <?php echo e(request()->is('galeri') ? 'bold' : 'normal'); ?>;
           ">
            Galeri Foto
        </a>
    </nav>
</header>
<?php /**PATH C:\Users\Nathanael\Documents\Laravel\belajar-laravel\laravel-bersih\resources\views/components/header.blade.php ENDPATH**/ ?>