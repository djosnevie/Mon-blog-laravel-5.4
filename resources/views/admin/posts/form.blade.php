	{!! Form::model($post, [
		'route'=> $post->id ? ['admin.posts.update', $post->id] : ['admin.posts.store'],
		'method'=> $post->id ? 'PUT': 'POST'
	]) !!}
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('name', 'Nom') !!}
					{!! Form::text('name', null, ['class'=>'form-control','required']) !!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('slug','Slug') !!}
					{!! Form::text('slug', null, ['class'=>'form-control', 'disabled']) !!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('category_id', 'Categories') !!}
					{!! Form::select('category_id', $categories, null, ['class'=>'form-control','required']) !!}
				</div>
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('content','Contenu') !!}
			{!! Form::textarea('content', null, ['class'=>'form-control','required']) !!}

		</div>

			{!! Form::submit($post->id ? 'Modifier' : 'Creér', ['class'=>'btn btn-primary']) !!}
		</div>
	
	{!! Form::close() !!}

