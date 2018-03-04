@extends('admin/layout')
@section('container')
	
	<h1>Gestion des articles</h1>
	<p>
		<a href="" class="btn btn-primary">Ajouter un nouvel articles</a>
	</p>
	<table class="table table-striped">
		<thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Catégories</th>
                <th>Publication date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($posts as $post)

				<tr>
					<td>{{ $post->id }}</td>
					<td>{{ $post->name }}</td>
					<td>{{ $post->category->name }}</td>
					<td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
					<td><a href="#" class="btn btn-primary">Editer</a> <a href="#" class="btn btn-danger">Supprimer</a></td>
				</tr>
				
        	@endforeach
        </tbody>
	</table>

	<div>
    	{{ $posts->links("vendor.pagination.bootstrap-4") }}
  	</div>


@endsection