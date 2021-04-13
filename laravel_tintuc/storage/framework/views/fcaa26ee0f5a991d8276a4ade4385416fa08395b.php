
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="<?php echo e(url('public/fontawesome-free-5.15.2-web/css/all.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(url('public/bootstrap-3.4.1/dist/css/bootstrap.css')); ?>"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta"/>
	<link rel="stylesheet" type="text/css" href="resources/views/style/style.css"/>
	<LINK REL="SHORTCUT ICON"  HREF="/images/logo.ico"/>
	<script type="text/javascript">var url = "<?php echo url('/'); ?>";</script>
	
</head>
<body>
	<div id="wrapper">
		<div class="header">
			<div class="header_top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="header_logo">
					<a href="<?php echo e(url('/')); ?>" title="Trang chủ"><img src="public/images/logo.png" alt="" /></a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2">
				<div class="header_social">
					<a href="https://www.facebook.com/" title="facebook"><img src="public/images/facebook.png" alt=""></a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2">
				<div class="header_social">
					<a href="https://twitter.com/" title="twitter"><img src="public/images/twitter.png" alt=""></a>				
				</div>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2">	
				<div class="header_social">
					<a href="https://vimeo.com/fr/" title="vimeo"><img src="public/images/vimeo.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</div>
				<?php echo $__env->make('../includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
		</div>
	<div class="content">
		<div class="home_page">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="home_bottom">
							<div class="heading">
									Kết quả tìm kiếm
							</div>
								<?php if(isset($timkiem) && $timkiem !=NULL): ?>
								<ul>
									<?php $__currentLoopData = $timkiem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a href="chi-tiet/<?php echo e($v->idnew); ?>">
											<img src="<?php echo e(url('public/images')); ?>/<?php echo e($v->idnew); ?>.png" alt="" width="200px" height="150px">
											<b><?php echo e(str_limit($v->title, $limit = 60, $end = '...')); ?></b>
											<p>
												<?php echo e(str_limit($v->short_description, $limit = 110, $end = '...')); ?>

												<span>[read more]</span>
											</p>
										</a>	
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
								
								<?php else: ?>
								<p class="search_error">
									<i class="fas fa-exclamation-triangle"></i>
									Không tìm thấy kết quả nào.
								</p>
								
								<?php endif; ?>
							
						</div>
						<div class="page_pagination" style="text-align: center;">
							<?php echo e($timkiem->links()); ?>

						</div>
					</div>
				</div>
			</div>
	
		</div>	
	</div>
		
	<div class="footer">			
		<?php echo $__env->make('../includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="footer_bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-5 col-md-6">
				<div class="footer_logo">
					<a href="#" title="Trang chủ"><img src="public/images/logo.png" alt="" /></a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-6">
				<div class="footer_copyright">
					Copyright <i class="far fa-copyright"></i>-2021-Project-Nhóm 10.
				</div>
			</div>
		</div>
	</div>
</div>
	</div>

<script src="<?php echo e(url('public/js/jquery.js')); ?>"></script>
<script src="<?php echo e(url('public/bootstrap-3.4.1/dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('public/js/front.js')); ?>"></script>

</body>
</html>
