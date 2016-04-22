<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("/", function(){
   return view("welcome");
});
Route::get("about", "PageController@about");
Route::get("contact", "PageController@contact");

Route::get("articles", "ArticlesController@index");
Route::get("articles/{id}", "ArticlesController@show");
Route::get("create", "ArticlesController@create");


Route::get("kiosks", "KiosksController@index");
Route::get("kiosks/{id}", "KiosksController@show");



Route::get("foo", function(){
   return "bar";
});