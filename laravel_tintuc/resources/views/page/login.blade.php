

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="resources/views/style/design.css"/>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h2>
      	Đăng nhập hệ thống!
      </h2>
    </div>

    <!-- Login Form -->
    <form action="{{url('login')}}" method="POST">
    		{!! csrf_field() !!}
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Nhập tài khoản...">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Nhập mật khẩu...">
      <input type="submit" class="fadeIn fourth btnsubmit" value="Đăng nhập">
      @if(session('notice'))
      	<div class="alert alert-danger">
      		{{session('notice')}}
      	</div>
      @endif
    </form>

  </div>
</div>
</body>
</html>