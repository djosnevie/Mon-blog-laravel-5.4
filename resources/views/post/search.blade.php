@extends('default')

@section('post')

	<h1>Je fait une recherche</h1>
	<form class="form-horizontal" method="POST" action="{{ route('search') }}">
		{{ csrf_field() }}
		<input type="text" class="form-control" name="search" value="{{ old('search') }}"><br> <button type="submit" class="btn btn-primary">Search</button>
	</form>

@endsection