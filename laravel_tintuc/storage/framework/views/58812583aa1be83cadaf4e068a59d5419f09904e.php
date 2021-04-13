<?php $__env->startSection('content'); ?> 

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="home_bottom">
				<div class="heading">
						COVID-19
				</div>
				<ul>
					<?php if(isset($phapluat) && count($phapluat) > 0): ?>
					<?php $__currentLoopData = $phapluat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>
						<a href="detail.blade.php<?php echo e($v->idnew); ?>">
							<img src="<?php echo e(url('public/images')); ?>/<?php echo e($v->idnew); ?>.png" alt="" width="200px" height="150px">
							<b><?php echo e(str_limit($v->title, $limit = 60, $end = '...')); ?></b>
							<p>
								<?php echo e(str_limit($v->short_description, $limit = 110, $end = '...')); ?>

								<span>[read more]</span>
							</p>
						</a>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</ul>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.tpl_default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>