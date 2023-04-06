@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ url('create') }}" class="btn btn-primary btn-lg">create post</a>
                        <hr>
                        @if (count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                @foreach ($posts as $post)
                                    <tr>
                                        <th>{{ $post->title }}</th>
                                        <th><a href="{{ url('/edit/' . $post->id) }}"><i class="fa fa-edit">edit</i></a>
                                        </th>
                                        <th><a href="{{ url('/delete/' . $post->id) }}"><i
                                                    class="fa-solid fa-trash">delete</i></a></th>
                                    </tr>
                                @endforeach

                            </table>

                        @else
                            <p>you have no post yet</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
