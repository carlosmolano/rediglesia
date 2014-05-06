
@section('container')
<h1>Users</h1>
@if($users)
	<ul>
		@foreach($users as $user)
			<li>
			{{ $user->username}} - {{ $user->email}} </br>
			<a href="{{route('users.show',['users'=> $user->id])}}">{{ $user->id}}</a>
			</li>
		@endforeach
	</ul>
@else
 No hay usuarios
@endif
@stop