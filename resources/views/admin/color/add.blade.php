@extends('admin.base')

@section('style')
@endsection

@section('content')
	<form action="{{route('admin.handleEdit')}}" method="POST" enctype="multipart/form-data">
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
					      <input type="text" class="form-control " id="" placeholder="name" name="nameColor">
					    </div>
						<div class="form-group col-md-6 col-6 col-xl-6">
							<h4 class="pl-4 text-danger">Description</h4>

							<textarea class="pl-5" name="description"></textarea>
						</div>
					    <div class="form-group col-md-6 pl-5 ">
					      	<h4 class="pl-4 text-danger">Status</h4>
					      	<div class="form-check">
							  <input class="form-check-input" type="radio" name="status" id="status_1" value="1" checked>
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
				  
				  
				</div>
			<div class="col-12 ">
				<button type="submit" class="btn btn-danger btn-add btn-block">ADD</button>
			</div>
	</div>
		</form>
@endsection

@section('script')

@endsection