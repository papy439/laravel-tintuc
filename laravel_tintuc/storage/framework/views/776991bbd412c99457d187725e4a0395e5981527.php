<?php $__env->startSection('title', 'Chào mừng bạn đến trang admin'); ?>

<?php $__env->startSection('heading', 'Chào mừng bạn đến trang quản trị website'); ?>

<?php $__env->startSection('content'); ?>


<p>
  <img src="<?php echo e(url('public/admin/dist/img/admin-animation.gif')); ?>" alt="Web Admin Animation" style="width: 50%;">
</p>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('back.template.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>