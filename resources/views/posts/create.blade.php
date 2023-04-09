@extends('layouts.app')
@section('content')
<div class="container">
<h3 class="text text-center b-400">create post</h3>
<form style="padding:1% 0% 0% 0%; align:center;" action="{{ url('/store') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group "  style="padding: 1% 0% 0% 0%;">
      <label >Add post title</label>
      <input type="text" class="form-control" name="title"  placeholder="post title">
    </div>
    <div class="form-group "  style="padding: 1% 0% 0% 0%;">
        <label >Add post body</label>
        <textarea class="form-control ckeditor" id="body" name="body" rows="2"></textarea>
      </div>
      <div class="form-group "  >
        <label >upload cover image</label>
        <input type="file"  name="cover_image"/>
      </div>

<div class="form-group" style="padding: 1% 0% 0% 0%;">
<button class="btn btn-primary btn-lg btn-block">submit</button>
</div>
  </form>
</div>
@endsection
