<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function about(){
        $first = "John";
        $last = "Liu";
        $title = "About ME!";
        
//        return view ("pages.about", compact("first", "last", "title"));
        return view ("pages.about")->with([
            "title" => $title,
            "first" => $first,
            "last" => $last
        ]);
    }
    
    public function contact(){
        $title = "contact";
        $people = [
          'Yalor Otwell', 'Dayle Rees', 'Eric Barnes'
        ];
        return view("pages.contact", compact("people", "title"));
    }
}
