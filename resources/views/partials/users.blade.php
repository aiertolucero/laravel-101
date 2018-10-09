@extends('welcome')


@section('content')
	<hr>
	<h5>List of users</h5>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Group</th>
			</tr>
		</thead>
		<tbody>
			@forelse($users as $user)
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->group->name}}</td>
				</tr>
			@empty
				<tr>
					<td colspan="2">No result...</td>
				</tr>
			@endforelse
		</tbody>
	</table>
@endsection