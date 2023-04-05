@extends('layouts.app')
@section('content')

<div class="container">
    <a class="btn btn-outline-secondary " href="{{ url('/posts') }}">Go Back</a>

    <h3>{{ $post->title }}</h3>
    <div>
        <p>{!! $post->body !!}</p>
        <hr>
        <small>published on: {{ $post->created_at }}</small>
    </div>

    <a href="{{ url('/edit/'. $post->id ) }}" class="btn btn-outline-primary">Edit</a>


</div>

@endsection
