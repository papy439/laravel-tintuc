@extends('templates.tpl_default')


@section('content') 
@include('includes.slide')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="home_top">
				<div class="home_top_left">
					<div class="heading">
						Tin mới nhất
					</div>
					<ul>
						@if(isset($news) && count($news) > 0)
						@foreach($news as $k => $v)
						<li>
							<a href="chi-tiet/{{$v->idnew}}">
								<img src="{{url('public/images')}}/{{$v->idnew}}.png" alt="" width="200px" height="150px">
								<b>{{ str_limit($v->title, $limit = 70, $end = '...') }}</b>
								<p>
									{{ str_limit($v->short_description, $limit = 110, $end = '...') }}
									<span>[read more]</span>
								</p>
							</a>
						</li>
						@endforeach
						@endif
					</ul>
				</div>
				<div class="home_top_right">
					<div class="heading">
						Về chúng tôi
					</div>
					<img src="{{url('public/images/logo.png')}}" alt="about" width="220px">
					<b>Nhóm 10</b>
					<p><strong>Lập trình web bài tập cuối kỳ năm 2021.</strong></p>
					<p>Đề tài tìm hiểu về php framework sử dụng Laravel làm một website về tin tức đăng và chạy được trên
					000webhost và làm thêm bài tập SEO...
					<a href="{{url('/about')}}" title="Xem them">[read more]</a>
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
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="heading" style="margin-top: 55px; color: #FFF;">
				Tin thế giới
			</div>
			
		</div>
		@if(isset($newsTG) && count($newsTG) > 0)
		@foreach($newsTG as $k => $v)
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="home_center">
				<a href="chi-tiet/{{$v->idnew}}">
					<img src="{{url('public/images')}}/{{$v->idnew}}.png" alt="" width="200px" height="150px">
					<b>{{ str_limit($v->title, $limit = 70, $end = '...') }}</b>
					<p>
						{{ str_limit($v->short_description, $limit = 110, $end = '...') }}
						<span>[read more]</span>
					</p>
				</a>
			</div>
		</div>
		@endforeach
		@endif
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="home_bottom">
				<div class="heading">
						COVID-19
				</div>
				<ul>
					@if(isset($newsCOV) && count($newsCOV) > 0)
					@foreach($newsCOV as $k => $v)
					<li>
						<a href="chi-tiet/{{$v->idnew}}">
							<img src="{{url('public/images')}}/{{$v->idnew}}.png" alt="" width="200px" height="150px">
							<b>{{ str_limit($v->title, $limit = 60, $end = '...') }}</b>
							<p>
								{{ str_limit($v->short_description, $limit = 110, $end = '...') }}
								<span>[read more]</span>
							</p>
						</a>
					</li>
					@endforeach
					@endif
				</ul>
				</div>
			</div>
		</div>
	</div>

@endsection
