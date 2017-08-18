@extends ('layout')




@section ('content')

<div class="col-sm-8">
<h1>Publish A Post</h1>
<hr>
<form method="POST" action="/posts">
 
 {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
  
  @include ('layouts.validate')
  
</form>
</div>


@endsection