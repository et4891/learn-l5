<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

//use Request;

/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{
    /**
     * ArticlesController constructor.
     */
    public function __construct() {
        //auth value is referring to the key in Kernel.php > $routeMiddleware array
//        $this->middleware('auth'); // all routes will be redirected
//        $this->middleware('auth', ['only' => 'create']);  //only create route will be redirected
//        $this->middleware('auth', ['except' => 'create']);  //all routes except create will be redirected
    }


    /**
     * @return mixed
     */
    public function index(){

        $articles = Article::latest('published_at')->published()->get();
        $title = "Articles";
        
        return view('articles.index', compact('articles', 'title'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id){
        $article = Article::findOrFail($id);
        $title = $article->title;

        return view('articles.show', compact('article', 'title'));
    }

    /**
     * @return mixed
     */
    public function create()
    {
        $title = 'Create';
        return view('articles.create');
    }

    /**
     * @param ArticleRequest $request
     * @return mixed
     */
    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());    //get all the inputs
        Auth::user()->articles()->save($article);   //use the relationship between user and article to reference the user_id
        return redirect('articles');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request) {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('articles');
    }
}
