@extends('layouts.app')
@section('content')

<div class="container-fluid">
<h3 class="text text-center b-400">create post</h3>
<form style="padding:2% 5% 0% 5%; align:center;" action="{{ url('/store') }}" method="post">
    @csrf
    <div class="form-group "  style="padding: 3% 0% 0% 0%;">
      <label >Add post title</label>
      <input type="text" class="form-control" name="title"  placeholder="post title">
    </div>
    <div class="form-group "  style="padding: 3% 0% 0% 0%;">
        <label >Add post body</label>
        <textarea class="form-control" name="body" rows="3"></textarea>
      </div>
<div class="form-group" style="padding: 3% 0% 0% 0%;">
<button class="btn btn-primary btn-lg btn-block">submit</button>
</div>
  </form>
</div>
@endsection
