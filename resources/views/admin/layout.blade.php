<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title','blog for djodjo kabongo')</title>

    <!-- Bootstrap core CSS -->
    <link href="/blog/public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/blog/public/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="{{ route('home') }}">Accueil</a>
          <a class="nav-link" href="#">Apropos</a>
        </nav>
      </div>
    </div>
  <div class="container">
      <div class="row">
       <div class="col-md-12">
         @yield("container")
       </div>
    </div>
  </div>


  </body>
</html>
