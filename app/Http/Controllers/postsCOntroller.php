<?php

namespace App\Http\Controllers;
use App\Models\Post;
// use Illuminate\Http\Request;
// use DB;
class postsController extends Controller
{
    //
    public function index()
    {

$posts=Post::all();
$posts=Post::Latest()->paginate(8);
        return view('posts.index')->with('posts',$posts);
        # code...
    }
    public function show($id)
    {

        $post= Post::find($id);
        return view('posts.show')->with('post',$post);

    }
}
