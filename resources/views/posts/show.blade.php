@extends('layouts.app')
@section('content')

<div class="container">
    <a class="btn btn-outline-secondary " href="{{ url('/') }}">Go Back</a>

    <h3>{{ $post->title }}</h3>
    <div>
        <p>{{ $post->body }}</p>
    </div>
    <small>{{ $post->created_at }}</small>
</div>

@endsection
