@extends('welcome')


@section('content')
	<hr>
	<h5>New Group</h5>
	<hr>
	<form class="text-right" method="POST" action="/add-group">
		@csrf
		
		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" name="name" placeholder="Enter Group Name" />
			</div>
		</div>

	    <button class="btn btn-default" type="submit">Save</button>
	</form>
@endsection