
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

    @include('layouts.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The BlogaSpere</h1>
        <p class="lead blog-description">A little blog for a big world.</p>
      </div>
    </div>
    <!-- @if (count($errors)) -->
      <div class="alert alert-danger {{(count($errors)) ? 'show' : 'no-show'}}">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    <!-- @endif -->
    <div class="container">
      <div class="row">

        @yield ('content')

        @include('layouts.sidebar')

      </div><!-- /.row -->
    </div><!-- /.container -->

    @include('layouts.footer')

  </body>
</html>