
	<div class="slider_wrap">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				@if(isset($Slider) && count($Slider) > 0)
				@foreach($Slider as $k => $v)
				<div class="item @if($k == 0) active @endif">
					<a href="chi-tiet/{{$v->idnew}}">
				  		<img src="{{url('public/images')}}/{{$v->idnew}}.png" alt="" 
				  		style="height: 600px; width: 900px; margin-left: 335px; ">
				  		<div class="carousel-caption" style="color: white; font-size: 23px; font-weight: 700;">
				        {{$v->title}}
				      </div>
					</a>
				</div>
				@endforeach
				@endif
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
