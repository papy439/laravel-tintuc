@extends('templates.tpl_default')


@section('content') 

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="home_bottom">
				<div class="heading">
						Tin pháp luật
				</div>
				<ul>
					@if(isset($phapluat) && count($phapluat) > 0)
					@foreach($phapluat as $k => $v)
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
				<div class="page_pagination" style="text-align: center;">
					{{$phapluat->links() }}
				</div>
			</div>
		</div>
	</div>

@endsection
