@extends('front-end.base')
@section('style')
	<style>
	.product-as{
		position: relative;
	}
	.product-as h3{
		color:#7dc30d;
	}
	.product-as span{
		height: 3px;
	    background: #333333;
	    width: 80%;
	    left: 24%;
	    position: absolute;
	    top: 66%;
	}
	span.color{
		width: 12px;
		height: 12px;
		position: absolute;
		top: 30%;
		left: 80%;

	}
	label.rel-color{
		position: relative;

	}
	span.cost{
		text-decoration: line-through;
	}
	a.link-a{
			color: #a9abad;
			text-decoration: none;
		}
		a.link-a:hover{
			color:#2ae50d;
		}
	@media(min-width: 360px) and (max-width: 480px){
	
		.mg-t{
			margin-top: 15px;
		}
		.label-contact{
			color: red;
			width: 50%;
		}
		.product-as span{
			top: 75%;
			width: 40%;
			left: 63%;
		}
	}
	@media(min-width: 481px) and (max-width: 767px){
	
		.mg-t{
			margin-top: 15px;
		}
		.label-contact{
			color: red;
			width: 50%;
		}
		.product-as span{
			top: 75%;
			width: 25%;
			left: 75%;
		}
		
	}
	</style>
@endsection
@section('content')
	<section class="content pt-5 mb-5">
				<div class="container">
					{{-- <div class="row pl-3 pb-4">
						<span><a href="{{ route('home') }}" class="text-secondary"> Trang chủ</a> >>
							<a href="#" class="text-secondary">
								
								{{$info->categories->name_categories}}

							</a>
						
						 <a href="#" class="text-secondary">Quần âu</a> >>
						
					</div> --}}
					<div class="row pt-2 pl-3 pb-3 link-li">
						<a href="{{route('home')}}" class="link-a"> Trang chủ / </a>
						@foreach($namePrCate as $nPcate)
							<a href="{{route('allProduct',['id'=>$nPcate->id])}}" class="link-a"> {{$nPcate->name_parent_categories}} / </a>
						@endforeach
						<a href="{{route('cateProduct',['id'=>$namecate['id']])}}" class="link-a"> {{$namecate['name_categories']}}/ </a>

						<a href="{{route('detail',['id'=>$info['id']])}}" class="link-a">{{$info['name']}}</a>
					</div>
					<div class="row ">
						<div class="col-md-12 col-12 col-lg-6 col-xl-6">
					        <div class="show" href="{{ URL::to('/') }}/upload/image/{{$infoImage[0]}}">
					       
					          	<img src="{{URL::to('')}}/upload/image/{{ $infoImage[0] }}">
					        </div>
						      <div class="small-img">
						        <img src="{{asset('img/online_icon_right@2x.png')}}" class="icon-left" alt="" id="prev-img">
						        <div class="small-container">
							          <div id="small-img-roll">
							          	@foreach($infoImage as $item)
								            <img src="{{URL::to('/')}}/upload/image/{{$item}}" alt="" class="show-small-img">
								        @endforeach
							          </div>
						        </div>
						        <img src="{{asset('img/online_icon_right@2x.png')}}" class="icon-right" alt="" id="next-img">
						      </div>
						</div>
						<div class="col-md-12 col-12 mg-t">
							<h3>{{$info['name']}}</h3>
							<p class="pt-2">Giá : 
								<span class="cost pr-4">{{$info['price']}}.000 VNĐ</span>
								<span>{{ $info['price']-($info['price'] * ($info['sale_off']/100)) }}.000 VNĐ</span></p>
							<p>Tình trạng :
								@if($info['status']===1)
									Còn hàng
									@else
									Hết hàng
								@endif
							</p>
							<p>Mô tả : 
								{{$info['description']}}
							</p>
							<div class="row">
							<div class="col-12 col-md-6">
								<p>Màu Sắc :</p>
								@foreach($color as $key)
									<label for="color_{{$key['id']}}" class="rel-color pr-5 label-contact" >
									<input type="radio" id="color_{{$key['id']}}" name="inlineRadioOptionsColor"  value="{{$key['id']}}">
									<span class="color pr-2" style="background-color:">{{$key['name_color']}} 
									</span>
									</label>
									<br>
								@endforeach
							</div>
							<div class="col-12 col-md-6">
								<label for="qty" class="label-contact" >Số lượng</label>
								<select name="" id="qtyPd">
									@for($i= 1 ; $i < $info['quantity'] ; $i++)
									<option value="{{$i}}">{{$i}}</option>
									@endfor
								</select>
							</div>
							</div>

							<div class="row pb-5">
								<div class="col-12 col-md-6">
									<p>Size:</p>
									@foreach($infoSize as $key)
										<label for="size_{{$key}}" class="rel-color pr-5 label-contact" >
										<input type="radio" id="size_{{$key}}" name="inlineRadioOptionsSize"  value="{{$key}}">
										<span class="color">{{$key}}</span>
										</label>
										<br>
									@endforeach
								</div>
								
							
							</div>
							
							<button class="btn  btn-success btn-add mr-5">ADD CART</button>	
							<a href="" class="btn btn-danger text-white">BUY NOW</a>	
						</div>
					</div>
					<div class="row product-as pt-5">
						<h3>Sản Phẩm Tương Tự</h3>
						<span></span>
					</div>
					<div class="row product-main">
						<div class="container-fluid">
							<div class="row">
								@foreach($infoToo as $key =>$item)
									<div class="col-12 col-sm-4 sha-dow">
										<div class="product-size">
											<div class="img-product">
												<a href="{{route('detail',['id' => $item['id']])}}">
													<img src="{{URL::to('/')}}/upload/image/{{$item['url_image'][0]}}" alt="">
												</a>
												<span>{{$item['sale_off']}}%</span>
											</div>
											<div class="profile-product">
												<a href="{{route('detail',['id' => $item['id']])}}">
													<p class="text-center"> {{$item['name']}}</p>
												</a>

												<p class="text-center profile-product-p" >{{$item['price']}}.000 VNĐ</p>
											</div>
											<div class="go-to-product">
												<a href="{{route('detail',['id' => $item['id']])}}">
													<i class="fa fa-shopping-cart"></i>
												</a>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-36251023-1']);
		  _gaq.push(['_setDomainName', 'jqueryscript.net']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

	</script>
@endsection

@push('js')
	<script type="text/javascript">
		$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$('.btn-add').click(function(){
			let self = $(this);
	  		let IdPd = "{{$info['id']}}";
	  		let qty = $('#qtyPd').val();
	  		let idColor  = $('input[name="inlineRadioOptionsColor"]:checked').next().text().trim();
	  		let idSize  = $('input[name="inlineRadioOptionsSize"]:checked').next().text().trim();
	  		alert(idSize);
	  		alert(idColor);
	  		if($.isNumeric(IdPd)){
	  			$.ajax({
	  				headers: {
				          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
	  				url: "{{ route('Cart') }}",
	  				type: "POST" ,
	  				data:{id:IdPd,qty:qty,color:idColor,size:idSize},
	  				beforeSend:function(){
	  					self.text('Adding To Cart ...');
	  				},
	  				success: function(result){
						self.text('ADD SUCCESS');
						result = $.trim(result);
						if(result === 'OK') {
							alert('add cart successful');
						} else {
							alert('can not add cart');
						}
					}
	  			})
	  		}
		});
	</script>
	<script type="text/javascript" src="{{asset('js/scroll.js')}}"></script>
@endpush
