<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;

//use Request;

/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{
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
        Article::create($request->all());
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
