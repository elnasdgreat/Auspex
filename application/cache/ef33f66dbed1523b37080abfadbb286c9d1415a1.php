<?php $__env->startSection('content'); ?>
    <p>name : <?php echo e($name); ?></p>
    <p>Hello</p>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>