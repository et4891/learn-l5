<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
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
     * @param CreateArticleRequest $request
     * @return mixed
     */
    public function store(CreateArticleRequest $request)
    {
        Article::create($request->all());
        return redirect('articles');
    }
}
