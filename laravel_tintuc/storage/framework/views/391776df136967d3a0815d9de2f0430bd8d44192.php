<?php $__env->startSection('content'); ?> 

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="home_bottom">
				<div class="heading">
					<?php echo e($newsCat->title); ?>

				</div>
				<ul>
				
				</ul>
				<div class="page_pagination">
					<?php echo e($newsCat->links()); ?>

				</div>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.tpl_default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>