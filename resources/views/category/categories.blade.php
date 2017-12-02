@extends('default')

@section("post")
   @foreach($categories->post as $post )


            <a href="{{ route('posts.show', $post) }}" style="text-decoration: none;"><h1>{{ $post->name }}</h1></a>
            <p>
              <small>
                Catégories: <a href="{{ route('posts.category', $post->category->slug) }}">{{ $post->category->name }}</a>
                publié le <em>{{ $post->created_at->format('d M Y') }}</em>
              </small>
            </p>
            <p>{{ substr($post->content,0, 200) }}...</p>
            <p class="text-right"><a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary">Lire la suite...</a></p>

  @endforeach

@endsection