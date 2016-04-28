<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
//use Request;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::latest('published_at')->published()->get();
        $title = "Articles";
        
        return view('articles.index', compact('articles', 'title'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
        $title = $article->title;

        return view('articles.show', compact('article', 'title'));
    }

    public function create()
    {
        $title = 'Create';
        return view('articles.create');
    }

    public function store(Request $request)
    {
        Article::create($request->all());

        return redirect('articles');
    }
}
