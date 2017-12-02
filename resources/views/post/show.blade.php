@extends('default')
@section('title')
	{{ $post->name }}
@endsection
@section('post')

	 <a href="{{ route('posts.show', $post->slug) }}" style="text-decoration: none;"><h1>{{ $post->name }}</h1></a>
     <p>
        <small>
          Catégories: <a href="{{ route('posts.category', $post->category->slug) }}">{{ $post->category->name }}</a>
          publié le <strong>{{ $post->created_at->format('d/m/Y à H:i') }}</strong>
        </small>
     </p>
     <p>{{ $post->content }}</p>

@endsection