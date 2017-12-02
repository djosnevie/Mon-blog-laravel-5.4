@extends("default")

@section("post")
   @foreach( $posts as $post )

            <a href="{{ route('posts.show', $post->slug) }}" style="text-decoration: none;"><h1>{{ $post->name }}</h1></a>
            <p>
              <small>
                Catégories: <a href="{{ route('posts.category', $post->category->slug) }}">{{ $post->category->name }}</a>
                publié le <strong>{{ $post->created_at->format('d/m/Y à H:i') }}</strong>
              </small>
            </p>
            <p>{{ substr($post->content,0, 150) }}...</p>
            <p class="text-right"><a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary">Lire la suite...</a></p>

  @endforeach
  <div>
    {{ $posts->links("vendor.pagination.bootstrap-4") }}
  </div>

@endsection

@section('category')
<h2>Les catégories</h2>
 <div class="list-group">
  @foreach( $categories as $category)
    <a href="{{ route('posts.category', $category->slug) }}" class="list-group-item justify-content-between">{{ $category->name }}
    <span class="badge badge-default badge-pill badge-primary">{{ $category->posts_count }}</span>
    </a>
   @endforeach
 </div>

 <h2>Les derniers articles</h2>
 <div class="list-group">
@foreach($lasts as $last)
      <a href="{{ route('posts.show', $last->slug) }}" class="list-group-item">
        {{ $last->name }}
      </a>
@endforeach
 </div>
@endsection