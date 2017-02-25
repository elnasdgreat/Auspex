<!DOCTYPE html>
<html>
    <head>
        <title><?php echo e($title); ?></title>

        <link
            type="text/css"
            rel="stylesheet"
            href="<?php echo e(base_url( 'vendor/materialize/css/materialize.min.css' )); ?>"
            media="screen,projection"/>
        
        <link
            type="text/css"
            rel="stylesheet"
            href="<?php echo e(base_url( 'vendor/font-awesome/css/font-awesome.min.css' )); ?>"/>
        <link
            type="text/css"
            rel="stylesheet"
            href="<?php echo e(base_url( 'assets/css/style.css' )); ?>"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <header>

    </header>

    <main>

        <?php echo $__env->yieldContent('content'); ?>

    </main>

    <footer>

    </footer>


    <script
        type="text/javascript"
        src="<?php echo e(base_url( 'vendor/jquery/jquery-3.1.1.min.js' )); ?>">
    </script>
    <script
        type="text/javascript"
        src="<?php echo e(base_url( 'vendor/materialize/js/materialize.min.js' )); ?>">
    </script>
    <script
        type="text/javascript"
        src="<?php echo e(base_url( 'assets/js/app.js' )); ?>">
    </script>

    </body>
</html>
