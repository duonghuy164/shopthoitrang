	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Demo View Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	{{-- <link rel="stylesheet" href="{{ asset('css/detail-pd/main.css') }}"> --}}
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	@yield('style')
	{{-- Nhung doan code css nam trong file view con se duoc hien thi o day --}}
	@stack('css')
</head>
<body>


		 <div class="container-fluid">
			@include('front-end.common.header')  <!-- //Nhung header view  -->


			<!-- Nhan du lieu tu cac file view truyen sang -->
			@yield('content')

			@include('front-end.common.footer')
		</div>

		
		
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/click-menu.js') }}"></script>
	<script src="{{ asset('js/zoom-image.js') }}"></script>
	
	<script src="{{ asset('js/main.js') }}"></script>
	@stack('js')
  	@yield('javascript')
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
</body>
</html>