@extends("layouts.main")


@section("title", "Products | Create")

@section("content")

<div class="container mt-5">
	<!-- {{-- @include("errors.form")  --}} -->


    <form action="POST">

        @csrf

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class='form-control bg-secondary' name="name">
            @error('name')
				    <span class="text-danger" role="alert">
				        <strong>{{ $message }}</strong>
				    </span>
            @enderror
        </div>

        <div class="form-group">
				<label for="">Price</label>
				<input type="number" class='form-control bg-secondary' name="price">

				@error('price')
				<span class="text-danger" role="alert">
				<strong>{{ $message }}</strong>
				</span>
				@enderror

			</div>

			<div class="form-group">
				<label for="">Count</label>
				<input type="number" class='form-control bg-secondary' name="count">

				@error('count')
				<span class="text-danger" role="alert">
				<strong>{{ $message }}</strong>
				</span>
				@enderror

			</div>
            <input type="submit" class="btn btn-danger" value="New">

    </form>


</div>



@endsection