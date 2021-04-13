
	<div class="slider_wrap">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php if(isset($Slider) && count($Slider) > 0): ?>
				<?php $__currentLoopData = $Slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="item <?php if($k == 0): ?> active <?php endif; ?>">
					<a href="chi-tiet/<?php echo e($v->idnew); ?>">
				  		<img src="<?php echo e(url('public/images')); ?>/<?php echo e($v->idnew); ?>.png" alt="" 
				  		style="height: 600px; width: 900px; margin-left: 335px; ">
				  		<div class="carousel-caption" style="color: white; font-size: 23px; font-weight: 700;">
				        <?php echo e($v->title); ?>

				      </div>
					</a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</div>

		<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<i class="far fa-hand-point-left"></i>
				
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<i class="far fa-hand-point-right"></i>
			</a>
		</div>
	</div>
