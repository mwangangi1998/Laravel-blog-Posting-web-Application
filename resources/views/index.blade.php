@extends("layouts.app")
@section('content')
<div class="jumbotron text-center">
<h1>Welcome to VTech Blogging for laravel</h1>
<p>This is a laravel full course from scratch </p>
<p ><a href="{{ url('login') }}" class="btn btn-primary btn-lg" role="button">Login</a>
    <a href="{{ url('Register') }}" class="btn btn-success btn-lg" role="button">Register</a></p>
</div>
@endsection
