@extends('templates.tpl_default')


@section('content') 
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="about_we">
				<div class="heading">
						Về chúng tôi
				</div>
				<ul>
					<li>
						<img src="{{url('public/images/logo.png')}}" alt="about" width="500px"><br>
						<b>Nhóm 10</b>
						<p><strong>Lập trình web bài tập cuối kỳ năm 2021.</strong></p>
						<p>Đề tài tìm hiểu về php framework sử dụng Laravel làm một website về tin tức đăng và chạy được trên
						000webhost và làm thêm bài tập SEO...
						</p>
						<div class="col-xs-12 col-sm-2 col-md-2">
							<div class="about_social">
								<a href="https://www.facebook.com/" title="facebook"><img src="public/images/facebook.png" alt=""></a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-2 col-md-2">
							<div class="about_social">
								<a href="https://twitter.com/" title="twitter"><img src="public/images/twitter.png" alt=""></a>				
							</div>
						</div>
						<div class="col-xs-12 col-sm-2 col-md-2">	
							<div class="about_social">
								<a href="https://vimeo.com/fr/" title="vimeo"><img src="public/images/vimeo.png" alt=""></a>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</div>
</div>
@endsection
