@extends ('layouts.layout')

@section ('content')
<div class="col-sm-8 blog-main">
  <h1>Create a posts</h1>
  <hr>
  <form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="body">Content</label>
      <input type="texarea" class="form-control" id="body" name="body">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>
  </form>
</div>
@endsection
