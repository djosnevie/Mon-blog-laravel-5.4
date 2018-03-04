@extends('admin.layout')
@section('container')

	<h1>Ajouter un nouvel article</h1>
	<a href="{{ route('admin.posts.index') }}">< Retour à la liste</a>
	@include('admin.posts.form')

@endsection