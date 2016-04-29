<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class PostsController
 * @package App\Http\Controllers
 */
class PostsController extends Controller
{
    /**
     * @return mixed
     */
    public function index() {
        $posts = Post::latest('posted_on')->postedOn()->get()->toArray();
        
        return view('posts.index', compact('posts'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * @return mixed
     */
    public function create() {
        return view('posts.create');
    }

    /**
     * @param PostRequest $request
     * @return mixed
     */
    public function store(PostRequest $request) {
        Post::Create($request->all());
        return redirect('posts');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * @param PostRequest $request
     * @param $id
     * @return mixed
     */
    public function update(PostRequest $request, $id) {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('posts');
    }
}
