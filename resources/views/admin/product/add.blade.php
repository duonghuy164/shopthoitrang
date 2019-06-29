@extends('admin.base')

@section('style')
@endsection

@section('content')
	<form action="{{route('admin.hanldeAddProduct')}}" method="POST" enctype="multipart/form-data">
		@csrf
		{{-- <div class="row">
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
					      <h4 class="pl-4 text-danger">Name</h4>
					      <input type="text" class="form-control " id="nameProdcuts" placeholder="name" name="nameProdcuts">
					    </div>
					    <div class="form-group col-md-9 float-left">
					    	<h4 class="pl-4 text-danger">Categories</h4>
					    	@foreach($categories as $key => $item)
					    		<div class="col-3 float-left">
							      	<label for="categories">{{ $item['name_categories'] }}</label>
							      	<input type="radio" class="float-right mr-5" name="cate" value="{{ $item['id'] }}" >
							    </div>
						    @endforeach
					      	
					    </div>

					    <div class="form-group col-md-3 float-left">
						   <h4 class="pl-4 text-danger">Brand</h4>
						    <select class="form-control" name="brands">
							      		@foreach($brand as $key =>$item)
									    	<option value="{{ $item['id'] }}">{{ $item['name_brand'] }}</option>
									    @endforeach
							</select>
						 </div>
				  <div class="form-group col-md-4 float-left">
				  	<h4 class="pl-4 text-danger">Color</h4>
				  	<div class=" col-3 pl-5">
					  	@foreach($color as $key =>$item)
				
								  <input class="form-check-input" type="checkbox" name="color[]" id="{{ $item['name_color'] }}" value="{{ $item['id'] }}" multiple >

								  <label class="form-check-label" for="{{ $item['name_color'] }}">
								    {{ $item['name_color'] }}
								  </label>
							
						@endforeach
					</div>
				  </div>
				  

				  <div class="form-group col-md-8">
				  	<h4 class="pl-4 text-danger">Size</h4>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" id="XS" name="size[]" value="XS" multiple>
					  	<label for="XS">XS</label>
					  	<br>

					  	<input type="checkbox" id="S" name="size[]" value='S' multiple> 
					  	<label for="S">S</label>
						<br>
					  	<input type="checkbox" id="M" name="size[]" value='M' multiple>
					  	<label for="M">M</label>
					  	<br>

					  	<input type="checkbox" id="L" name="size[]" value='L' multiple>
					  	<label for="L">L</label>
					  	<br>

					  	<input type="checkbox" id="XL" name="size[]" value='XL' multiple>
					  	<label for="XL">XL</label>
					  	<br>

					  	<input type="checkbox" id="XXL" name="size[]" value='XXL' multiple>
					  	<label for="XXL">XXL</label>
				  	</div>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" id="XS" name="size[]" value='25' multiple>
					  	<label for="XS">25</label>
					  	<br>

					  	<input type="checkbox" id="S" name="size[]" value='26' multiple>
					  	<label for="S">26</label>
						<br>
					  	<input type="checkbox" id="M" name="size[]" value='27' multiple>
					  	<label for="M">27</label>
					  	<br>

					  	<input type="checkbox" id="L" name="size[]" value='28' multiple>
					  	<label for="L">28</label>
					  	<br>

					  	<input type="checkbox" id="XL" name="size[]" value='29' multiple>
					  	<label for="XL">29</label>
					  	<br>

					  	<input type="checkbox" id="XXL" name="size[]" value='30' multiple> 
					  	<label for="XXL">30</label>
				  	</div>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" id="XS" name="size[]" value='31' multiple>
					  	<label for="XS">31</label>
					  	<br>

					  	<input type="checkbox" id="S" name="size[]" value='32' multiple>
					  	<label for="S">32</label>
						<br>
					  	<input type="checkbox" id="M" name="size[]" value='33' multiple>
					  	<label for="M">33</label>
					  	
				  	</div>
				  </div>

				  

				    <div class="form-group col-md-4">
				      <h4 class="pl-4 text-danger">Price</h4>
				      <input type="text" class="form-control" id="Price" name="price">
				    </div>


				    <div class="form-group col-md-4">
				      <h4 class="pl-4 text-danger">Quantity</h4>
				      <input type="text" class="form-control" id="Quality" name="qty">
				    </div>


				    <div class="form-group col-md-4">
				      <h4 class="pl-4 text-danger">Sale Off</h4>
				      <input type="text" class="form-control" id="sale" name="saleOff">
				    </div>

					
					<div class="form-group col-md-6">
					    <h4 class="pl-4 text-danger">Image</h4>

	   					 <input type="file" class="form-control-file" id="image" name="images[]" multiple="multiple">

				  	</div>
					<div class="form-group">
						<h4 class="pl-4 text-danger">Description</h4>

						<textarea class="pl-5" name="description"></textarea>
					</div>
				    <div class="form-group col-md-4 pl-5 ">
				      	<h4 class="pl-4 text-danger">Status</h4>
				      	<div class="form-check">
						  <input class="form-check-input" type="radio" name="status" id="status_1" value="1">
						  <label class="form-check-label" for="status_1">
						    1
						  </label>
						</div>


						<div class="form-check">
							  <input class="form-check-input" type="radio" name="status" id="status_2" value="0" >
							  <label class="form-check-label" for="status_2">
							    0
							  </label>
						</div>
				    </div>
				  
				  	<div class="form-group col-md-4 pl-5 ">
				      	<h4 class="text-danger">New</h4>
				      	<div class="form-check">
						  <input class="form-check-input" type="radio" name="new" id="new_1" value="1"> 
						  <label class="form-check-label" for="new_1">
						    1
						  </label>
						</div>


						<div class="form-check">
							  <input class="form-check-input" type="radio" name="new" id="new_2" value="0">
							  <label class="form-check-label" for="new_2">
							    0
							  </label>
						</div>
				    </div>

				    <div class="form-group col-md-4 pl-5 ">
				      	<h4 class="text-danger">Highlight</h4>
				      	<div class="form-check">
						  <input class="form-check-input" type="radio" name="highlight" id="highlight_1" value="1">
						  <label class="form-check-label" for="highlight_1">
						    1
						  </label>
						</div>


						<div class="form-check">
							  <input class="form-check-input" type="radio" name="highlight" id="highlight_2" value="0">
							  <label class="form-check-label" for="highlight_2">
							    0
							  </label>
						</div>
				    </div>
				</div>
			<div class="col-12 ">
				<button type="submit" class="btn btn-danger btn-add btn-block">ADD</button>
			</div>
	</div>
		</form>
@endsection

@section('script')

@endsection