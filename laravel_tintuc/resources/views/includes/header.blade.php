
<div class="header_bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-8">
				<div class="header_menu">
					<ul>
						<li><a href="{{url('/')}}" title="Trang chủ"><i class="fas fa-home" style="color: #f54c0b"></i></a>
						</li>
						<li><a href="{{url('/covid')}}">COVID 19</a></li>
						<li><a href="{{url('/trong-nuoc')}}">Trong nước</a></li>
						<li><a href="{{url('/the-gioi')}}">Thế giới</a></li>
						<li><a href="{{url('/')}}">Mục lục</a>
						<ul class="sub-menu">
							<li><a href="{{url('/tin-tuc')}}">Tin tức</a></li>
							<li><a href="{{url('/khoa-hoc-va-cong-nghe')}}">Khoa học & công nghệ</a></li>
							<li><a href="{{url('/phap-luat')}}">Pháp luật</a></li>
							<li><a href="{{url('/giao-duc')}}">Giáo dục</a></li>
							<li><a href="{{url('/showbiz')}}">Showbiz</a></li>
							<li><a href="{{url('/thoi-su')}}">Thời sự</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4">
				<div class="header_search">
					<form action="{{url('tim-kiem')}}" method="GET">
						<input type="text" id="btnSearch" placeholder="Nhập từ khóa tìm kiếm" name="keyword">
						<button><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
			