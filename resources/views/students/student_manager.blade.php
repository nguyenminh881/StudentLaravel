@extends('layouts.app')
 
@section('title', 'Home Page')
 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="students/create" class="btn btn-outline-primary">Add new
				student</a></div>

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col" class="pr-5">Birthday</th>
						<th scope="col">Address</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($students as $student)
					<tr>
						<td>{!! $student->id !!}</td>
						<td>{!! $student->fullname !!}</td>
						<td class="pr-5 text-right">{!! $student->birthday !!}</td>
						<td>{!! $student->address !!}</td>
						<td><a href="edit_student/{!! $student->id !!}"
							class="btn btn-outline-primary">Edit</a>
							<a href="delete_student/{!! $student->id !!}"
							class="btn btn-outline-primary">Delete</a>
					</tr>
					
					@empty
					<tr>
						<td colspan="3">No students found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>

</script>
@endsection