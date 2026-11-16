
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
        }

        a {
            text-decoration: none;
        }

        .container {
            padding: 40px;
        }
    </style>
</head>
<body>

    <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH C:\Users\Nathanael\Documents\Laravel\belajar-laravel\laravel-bersih\resources\views/layouts/app.blade.php ENDPATH**/ ?>