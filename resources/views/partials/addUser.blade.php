@extends('welcome')


@section('content')
	<hr>
	<h5>New User</h5>
	<form class="text-right" method="POST" action="/add-user">
		@csrf

		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" name="name" placeholder="Enter Name" />
			</div>
		</div>

		<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<select name="group_id" class="form-control">
					<option>Select a group</option>
					@foreach($groups as $group)
						<option value="{{$group->id}}">{{$group->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
		 
		<button class="btn btn-default" type="submit">Save</button>
	</form>
@endsection