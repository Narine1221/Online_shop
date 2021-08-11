@extends("layouts.main")


@section("title", "Products | Update")

@section("content")

	
	<div class="container mt-5">
		<form method="POST">

			@csrf

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class='form-control text-dark' name="name" 
					value="{{$product->name}}">
			</div>
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" class='form-control text-dark' name="price" 
					value="{{$product->price}}">
			</div>
			<div class="form-group">
				<label for="">Count</label>
				<input type="text" class='form-control text-dark' name="count"
					value="{{$product->count}}">
			</div>
			<div>
				<input type="submit" class="btn btn-secondary" value="Update">
			</div>
		</form>
	</div>

@endsection