@extends('layouts.app')
@section('content')

  <div class="container">
    <h1>Posts</h1>


    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card-body " style="width:70%;padding-top:3px;">
            <ul class="list-group ">
                <li class="list-group-item">
                    <a href="{{url( '/post/'.$post->id )}}"><h3> {{ $post->title }}</h3></a>
                    <small>published on: {{ $post->created_at }}</small>

                </li>


            </ul>

        </div>
        @endforeach
        <div>
            {{ $posts->links()}}
        </div>
    @else
        <p class="text text-center">No posts available</p>
    @endif

</div>
@endsection
