<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Helper\UploadFile;
use \Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $newNameForImage = new UploadFile();
        $newNameForImage = $newNameForImage->uploadOne($request, 'image', 'public/uploads/images/posts');

        $data = [
            'name'          => $request->name,
            'title'         => $request->title,
            'content'       => $request->content,
            'category_id'   => $request->category_id,
            'image'         => $newNameForImage,
            'user_id'       => auth()->user()->id,
        ];
        Post::create($data);
        Session::flash('flash_massage_type', 1);
        return redirect('admin/posts')->withFlashMassage('post Added Susscefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $title, $id)
    { 
        $post = Post::where('id', $id)->with('comments')->first();
        return view('site.post', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::where('id', $id)->first();
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
