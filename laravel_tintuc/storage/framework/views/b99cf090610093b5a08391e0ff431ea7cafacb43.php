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
				<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
		</div>
	<div class="content">
		<div class="home_page">
		<?php echo $__env->yieldContent('content'); ?>	
		</div>	
	</div>
		
	<div class="footer">			
		<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

<script src="<?php echo e(url('public/js/jquery.js')); ?>"></script>
<script src="<?php echo e(url('public/bootstrap-3.4.1/dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('public/js/front.js')); ?>"></script>

</body>
</html>