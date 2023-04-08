<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Http\Request;

use DB;

class postsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

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

        $this->validate(
            $request,
            [
                'title' => 'required',
                'body' => 'required',
                'cover_image' => 'image|nullable|max:10000'
            ]
        );
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('cover_image'), $imageName);
            // You can also store the image path in the database or perform any other action as needed
        }

        $post = new Post();
        $post->title = $request->title;
        $post->user_id = auth()->user()->id;
        $post->body = $request->body;
        $post->cover_image = $imageName;
        $post->save();
        return redirect('/posts')->with('success', 'post created');
    }


    public function edit($id)
    {

        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {
            return redirect('posts')->with('error ', 'access denied');
        }
        return view('posts.edit', compact('post'));

    }
    //edit post
    public function update(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('cover_image'), $imageName);
            // You can also store the image path in the database or perform any other action as needed
        }
        $data = Post::find($request->id);
        $data->title = $request->title;
        if ($request->hasFile('cover_image')) {
            $data->cover_image=$imageName;
        }
        $data->title = $request->title;
        $data->save();
        return redirect('/posts')->with('success', 'post updated');
        // $post=POst::find($id);


    }
    public function destroy($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {
            return redirect('posts')->with('error ', 'access denied');
        }
        if ($post->cover_image!='noimage.jpg') {
            # code...
            Storage::delete('public/cover_image'.$post->cover_image);
        }
        $post->delete();
        return redirect('/posts')->with('success', 'post deleted');

    }

}
