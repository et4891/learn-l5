<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all()->toArray();
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id)->toArray();
        return view ('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {

        if($request->has('id')){
            $post = Post::find($request->input('id'));
            $post->name = $request->input('name');
            $post->body = $request->input('body');
            $post->save();
        }else{
            $input = $request->all();
            Post::create($input);
        }

        return redirect('posts');
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect('posts');
    }

    public function update($id) {
        $post = Post::find($id)->toArray();
        return view('posts.update', compact('post'));
    }
}
