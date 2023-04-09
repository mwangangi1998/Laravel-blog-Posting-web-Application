@extends("layouts.app")
@section('content')
<div class="jumbotron jumbotron-fluid">
<div class="bg-image" >
@include('inc.background')
</div>
<h3 class="text text-center" >Featured Blogs</h3>
<h5 class="text text-center">Get started
<div class="btn btn-warning outline block" style="align:center;">
  <a href="{{ url('/posts') }}"> lean more...</a>
</div>
</h5>
</div>

@endsection
