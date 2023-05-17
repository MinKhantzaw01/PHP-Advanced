<?php $__env->startSection('title',"PKT"); ?>

<?php $__env->startSection('content'); ?>

    <img src="<?php echo URL_ROOT.'/assets/images/coder.jpg'; ?>" alt="">

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>