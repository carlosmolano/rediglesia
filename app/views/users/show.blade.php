@section('container')
	<h1>{{ $user->id }}</h1>
	<h3>{{ $user->nombre}}</h3>
	<h3>{{ $user->username}}</h3>
	<h3>{{ $user->email}}</h3>
@stop