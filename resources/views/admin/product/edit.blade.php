@extends('admin.base')
	
@section('style')
	<style type="text/css">
		.height-img{
			max-height: 100px;
		}
	</style>
@endsection

@section('content')
	<form action="{{ route('admin.handleEditProducts',['id'=>$info['id']]) }}" method="POST" enctype="multipart/form-data"> 
		@csrf
	{{-- 	<div class="row">
			
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif

				<div class="alert alert-danger">
					<h3>{{ $mess }}</h3>
				</div>
		</div> --}}
		<div class="form-row">
			<div class="col-12">
				  <div class="form-row">
					    <div class="form-group col-md-12">
					      <h4 class="text-danger">Name</h4>
					      <input type="text"
					      		 class="form-control"
					      		 id="nameProdcuts" 
					      		 placeholder="name" 
					      		 name="nameProdcuts"
								 value="{{ $info['name'] }}" 	
					      		 >
					    </div>
					    <div class="form-group col-md-9 float-left">
					    	<h4 class="text-danger">Categories</h4>
					    	@foreach($cates as $key => $item)
					    		<div class="col-3 float-left">
							      	<label for="categories">{{ $item['name_categories'] }}</label>
							      	<input type="radio" 
							      	class="float-right mr-5" 
							      	name="cate" 
							      	value="{{ $item['id'] }}"
							      	multiple
							      	{{ $item['id'] === $info['categories_id'] ? 'checked' : ''}} >
							    </div>
						    @endforeach
					      	
					    </div>

					    <div class="form-group col-md-3 float-left">
						    <h4 class="text-danger">Brand</h4>
						    <select class="form-control" name="brands">
							      		@foreach($brand as $key =>$item)
									    	<option 
									    	value="{{ $item['id'] }}"
									    	 {{ $item['id'] == $info['brand_id'] ? 'selected' : ''}}>{{$item['name_brand']}}</option>
									    @endforeach
							</select>
						 </div>
				  <div class="form-group col-md-4 float-left">
				  	<h4 class="text-danger">Color</h4>
				  	<div class=" col-3">
					  	@foreach($color as $key =>$item)

						    
								  <input class="form-check-input"
								  		 type="checkbox" 
								  		 name="color[]" 
								  		 id="{{ $item['name_color'] }}" 
								  		 value="{{ $item['id'] }}" 
								  		 multiple
								  		 {{ in_array($item['id'],$infoColor) ? 'checked' : ''}}>

								  <label class="form-check-label" for="{{ $item['name_color'] }}">
								    {{ $item['name_color'] }}
								  </label>
								  <br>
							
						@endforeach
					</div>
				  </div>
				 
				 <div class="form-group col-md-8">
				  	<h4 class="pl-5 text-danger">Size</h4>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" 
					  			id="XS" 
					  			name="size[]" 
					  			{{in_array('XS',$infoSize) ? 'checked' :''}} 
					  			value="XS" 
					  			multiple>
					  	<label for="XS">XS</label>
					  	<br>

					  	<input type="checkbox" 
					  			id="S" 
					  			name="size[]" 
					  			{{in_array('S',$infoSize) ? 'checked' :''}}
					  			value='S' multiple> 
					  	<label for="S">S</label>
						<br>
					  	<input type="checkbox" id="M" name="size[]" 
					  			value='M' 
								{{in_array('M',$infoSize) ? 'checked' :''}}
					  			multiple>
					  	<label for="M">M</label>
					  	<br>

					  	<input type="checkbox" id="L" name="size[]" 
								{{in_array('L',$infoSize) ? 'checked' :''}}
					  			value='L' multiple>
					  	<label for="L">L</label>
					  	<br>

					  	<input type="checkbox" id="XL" name="size[]" 
					  			value='XL' 
								{{in_array('XL',$infoSize) ? 'checked' :''}}
					  			multiple>
					  	<label for="XL">XL</label>
					  	<br>

					  	<input type="checkbox" id="XXL" name="size[]" value='XXL' {{in_array('XXL',$infoSize) ? 'checked' :''}} multiple>
					  	<label for="XXL">XXL</label>
				  	</div>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" id="XS" name="size[]" {{in_array(25,$infoSize) ? 'checked' :''}} value='25' multiple>
					  	<label for="XS">25</label>
					  	<br>

					  	<input type="checkbox" id="S" name="size[]" {{in_array(26,$infoSize) ? 'checked' :''}} value='26' multiple>
					  	<label for="S">26</label>
						<br>
					  	<input type="checkbox" id="M" name="size[]" {{in_array('27',$infoSize) ? 'checked' :''}} value='27' multiple>
					  	<label for="M">27</label>
					  	<br>

					  	<input type="checkbox" id="L" name="size[]" {{in_array('28',$infoSize) ? 'checked' :''}} value='28' multiple>
					  	<label for="L">28</label>
					  	<br>

					  	<input type="checkbox" id="XL" name="size[]" {{in_array('29',$infoSize) ? 'checked' :''}} value='29' multiple>
					  	<label for="XL">29</label>
					  	<br>

					  	<input type="checkbox" id="XXL" name="size[]" {{in_array('30',$infoSize) ? 'checked' :''}} value='30' multiple> 
					  	<label for="XXL">30</label>
				  	</div>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" id="XS" name="size[]" {{in_array('31',$infoSize) ? 'checked' :''}} value='31' multiple>
					  	<label for="XS">31</label>
					  	<br>

					  	<input type="checkbox" id="S" name="size[]"  {{in_array('32',$infoSize) ? 'checked' :''}} value='32' multiple>
					  	<label for="S">32</label>
						<br>
					  	<input type="checkbox" id="M" name="size[]" {{in_array('33',$infoSize) ? 'checked' :''}} value='33' multiple>
					  	<label for="M">33</label>
					  	
				  	</div>
				  </div>


			    <div class="form-group col-md-4">
			      <h4 class="text-danger">Price</h4>
			      <input type="text" class="form-control" id="Price" name="price" value="{{ $info['price'] }}">
			    </div>


				    <div class="form-group col-md-4">
				      <h4 class="text-danger">Quantity</h4>
				      <input type="text" class="form-control" id="Quality" name="qty" value="{{ $info['quantity'] }}">
				    </div>


				    <div class="form-group col-md-4">
				      <h4 class="text-danger">Sale Off</h4>
				      <input type="text" class="form-control" id="sale" name="saleOff" value="{{ $info['sale_off'] }}">
				    </div>

				    <div class="form-group col-md-4">
				      <h4 class="text-danger">Description</h4>
				      <br>
				      <textarea name="" id="" cols="30" rows="10" >{{ $info['description'] }}</textarea>
				     
				    </div>

					
					<div class="form-group col-md-3">
					    <h4 class="text-danger">Image</h4>

	   					 <input type="file" class="form-control-file" id="image" name="images[]" multiple="multiple">

				  	</div>
					<div class="form-group col-md-5 pl-5">
						@foreach($infoImage as $key =>$item)
							<img src="{{ URL::to('/') }}/upload/image/{{ $item }}" alt="" class="height-img">
						@endforeach
					</div>
				    <div class="form-group col-md-4 pl-5 ">
				      	<h4 class="text-danger">Status</h4>
				      	<div class="form-check">
						  <input class="form-check-input" type="radio" name="status" id="status_1" value="1" {{($info['status'] = 1) ? 'checked' : ''}}>
						  <label class="form-check-label" for="status_1">
						    1
						  </label>
						</div>


						<div class="form-check">
							  <input class="form-check-input" type="radio" name="status" id="status_2" value="0" {{($info['status'] === 0) ? 'checked' : ''}}>
							  <label class="form-check-label" for="status_2">
							    0
							  </label>
						</div>
				    </div>
				    <div class="form-group col-md-4 pl-5 ">
				      	<h4 class="text-danger">New</h4>
				      	<div class="form-check">
						  <input class="form-check-input" type="radio" name="new" id="new_1" value="1" {{($info['new'] === 1) ? 'checked' : ''}}> 
						  <label class="form-check-label" for="new_1">
						    1
						  </label>
						</div>


						<div class="form-check">
							  <input class="form-check-input" type="radio" name="new" id="new_2" value="0" {{($info['new'] === 0) ? 'checked' : ''}} >
							  <label class="form-check-label" for="new_2">
							    0
							  </label>
						</div>
				    </div>

				    <div class="form-group col-md-4 pl-5 ">
				      	<h4 class="text-danger">Highlight</h4>
				      	<div class="form-check">
						  <input class="form-check-input" type="radio" name="highlight" id="highlight_1" value="1" {{($info['highlight'] === 1) ? 'checked' : ''}}>
						  <label class="form-check-label" for="highlight_1">
						    1
						  </label>
						</div>


						<div class="form-check">
							  <input class="form-check-input" type="radio" name="highlight" id="highlight_2" value="0" {{($info['highlight'] === 0) ? 'checked' : ''}} >
							  <label class="form-check-label" for="highlight_2">
							    0
							  </label>
						</div>
				    </div>
				  
				  
				</div>
			<div class="col-12 ">
				<button type="submit" class="btn btn-danger btn-add btn-block">UPDATE</button>
			</div>
	</div>
		</form>
@endsection

@section('script')

@endsection