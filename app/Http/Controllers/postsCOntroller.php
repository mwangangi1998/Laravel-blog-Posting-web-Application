<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use DB;
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


    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit',compact('post'));

    }
//edit post
public function update(Request $request)
{

    $request->validate([
        'title' => 'required',
        'body' => 'required'
]);
    $data=Post::find($request->id);
    $data->title=$request->title;
    $data->title=$request->title;
    $data->save();
    return redirect('/posts')->with('success' ,'post updated');
    // $post=POst::find($id);


}
public function destroy($id)
{
    $post=Post::find($id);
    $post->delete();
    return redirect('/posts')->with('success','post deleted');

}

}
