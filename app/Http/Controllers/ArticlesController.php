<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::all();
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
}
