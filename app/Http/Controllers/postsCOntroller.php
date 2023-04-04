<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

// use DB;
class postsController extends Controller
{
    //
    public function index()
    {

        $posts = Post::all();
        $posts = Post::Latest()->paginate(6);
        return view('posts.index')->with('posts', $posts);
        # code...
    }
    public function show($id)
    {

        $post = Post::find($id);
        return view('posts.show')->with('post', $post);

    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {

        $this->validate($request,
            [
                'title'=>'required',
                'body'=>'required'
            ]
            );
  $post =new Post();
  $post->title = $request->title;
  $post->body = $request->body;
$post->save();
return redirect('/posts')->with('success','post created');
    }

}
