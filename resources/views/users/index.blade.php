@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="display-3">Site Users</h1>
				@foreach ($users as $user)
					<h4>{{ $user->name }}</h4>
				@endforeach

				{{ $users->links() }}

			</div>
		</div>
	</div>
@stop