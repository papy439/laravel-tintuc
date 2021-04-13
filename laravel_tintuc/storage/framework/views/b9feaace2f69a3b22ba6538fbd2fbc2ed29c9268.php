<?php $__env->startSection('content'); ?> 
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="about_we">
				<div class="heading">
						Về chúng tôi
				</div>
				<img src="<?php echo e(url('public/images/logo.png')); ?>" alt="about" width="220px">
				<b>Nhóm 10</b>
				<p><strong>Lập trình web bài tập cuối kỳ năm 2021.</strong></p>
				<p>Đề tài tìm hiểu về php framework sử dụng Laravel làm một website về tin tức đăng và chạy được trên
				000webhost và làm thêm bài tập SEO...
				<a href="<?php echo e(url('/about')); ?>" title="Xem them">[read more]</a>
				</p>
				<div class="home_social" >
					<a href="https://www.facebook.com/" title="facebook"><img src="public/images/facebook.png" alt=""></a>
					<a href="https://twitter.com/" title="twitter"><img src="public/images/twitter.png" alt=""></a>
					<a href="https://vimeo.com/fr/" title="vimeo"><img src="public/images/vimeo.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.tpl_default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>