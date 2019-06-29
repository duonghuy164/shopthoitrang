<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('login/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('font/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('font/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('loign/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">

				<form action="{{route('admin.handleLogin')}}" method="POST" class="login100-form validate-form" >
					@csrf
					{{-- @if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif --}}
					<span class="login100-form-title p-b-43">
						Account Login
					</span>
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							Forgot password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	


</body>
</html>