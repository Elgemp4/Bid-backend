<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent("title"); ?></title>

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    </head>
    <body class="bg-bg-dark min-h-screen text-text">
        <?php echo $__env->yieldContent("content"); ?>
    </body>
</html>
<?php /**PATH /home/elgem/Documents/Worldskills/Laravel/Bid/resources/views/templates/base.blade.php ENDPATH**/ ?>