@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="/student" class="btn btn-outline-primary">student List</a></div>

			<form id="add-frm" method="POST" action="" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="fullname">fullname</label>
					<div>
						<input type="text" id="fullname" class="form-control mb-4" name="fullname"
							placeholder="Enter fullname" required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">birthday</label>
					<div>
						<input id="birthday" class="form-control mb-4" name="birthday" required></input>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">address</label>
					<div>
						<input type="text" id="address" class="form-control mb-4" name="address"
							placeholder="Enter address" required>
					</div>
				</div>

				@csrf

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">add new</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
 
