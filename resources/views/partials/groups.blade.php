@extends('welcome')


@section('content')
	<hr>
	<h5>List of groups</h5>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Group Name</th>
			</tr>
		</thead>
		<tbody>
			@forelse($groups as $group)
				<tr>
					<td>{{$group->name}}</td>
				</tr>
			@empty
				<tr>
					<td>No result...</td>
				</tr>
			@endforelse
		</tbody>
	</table>
@endsection