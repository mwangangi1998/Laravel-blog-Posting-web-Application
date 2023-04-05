@extends('layouts.app')
@section('content')

<div class="container-fluid">
<h3 class="text text-center b-400">Edit post</h3>
<form style="padding:2% 5% 0% 5%; align:center;" action="{{ url('/update/') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $post->id }}">
    <div class="form-group "  style="padding: 3% 0% 0% 0%;">
      <label >Edit post title</label>
      <input type="text" class="form-control" name="title" id="title"  value="{{ $post->title }}">
    </div>
    <div class="form-group "  style="padding: 3% 0% 0% 0%;">
        <label >Edit post body</label>
        <textarea class="form-control ckeditor"  name="body" rows="3"  id="body"> {{ $post->body }}</textarea>
      </div>
<div class="form-group" style="padding: 3% 0% 0% 0%;">
<button class="btn btn-primary btn-lg btn-block">submit</button>
</div>
  </form>
</div>
@endsection
