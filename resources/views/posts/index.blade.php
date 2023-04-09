@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Posts</h1>


        @if (count($posts) > 0)
            @foreach ($posts as $post)
            <div class="card" >
             <div class="row" >
                <div class="col-sm" >
                    <img src="{{ url('/cover_image/'.$post->cover_image) }}" alt="image" style="width:30%; ">
                </div>
                <div class="col" >
                    <a href="{{ url('/post/'. $post->id) }}">
                        <h3 class="p-4"> {{ $post->title }}</h3>
                    </a>
                    <small>published on: {{ $post->created_at }} by {{ $post->user->name }}</small>
                    @if (!Auth::guest())
                    @if (Auth::user()->id == $post->user_id)
                        <a href="{{ url('/delete/' . $post->id) }}" class="btn btn-danger "
                            style="margin-left:25%">delete</a>
                    @endif
                @endif
                </div>
             </div>
            </div>
            @endforeach
            <div>
                {{ $posts->links() }}
            </div>
        @else
            <p class="text text-center">No posts available</p>
        @endif

    </div>
@endsection
