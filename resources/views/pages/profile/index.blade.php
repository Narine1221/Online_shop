@extends("layouts.main")

@section("titlle", "Profile").

@section("content")

<div class="container mt-5">

        
	<form action="" method="POST">
		@csrf

		<div class="form-group">
			<input type="text" class='form-control' name="name" value="{{auth()->user()->name}}">
		</div>

		<div class="form-group">

			<input type="password" placeholder="Your password" class='form-control' name="password">
		</div>

		<div class="form-group">
			<input type="password" placeholder="New-password" class='form-control' name="new_password">
		</div>

		<div class="form-group">
			<input type="password" placeholder="Re_password" class='form-control' name="re_password">
		</div>

		<div>
			<input type="submit" class="btn btn-danger" value="Update">
		</div>

	</form>

</div>



@endsection