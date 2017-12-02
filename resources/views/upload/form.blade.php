@extends('default')
@section('post')
	
	<form action="{{ route('upload') }}" class="form-group" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div>
			<label for="">Nom</label>
			<input type="text" class="form-control" name="name" required>
		</div>
		<div>
			<label for="">Photo</label>
			<input type="file" class="form-control" name="photos" multiple required><br>
		</div>

			<button class="btn btn-primary" type="submit">Valider</button>

	</form>

@endsection

