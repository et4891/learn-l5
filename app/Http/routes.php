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

//ArticlesController
Route::resource("articles", "ArticlesController");

Route::controllers([
   'auth' => 'Auth\AuthController',
   'password' => 'Auth\PasswordController'
]);

Route::get('foo', ['middleware' => 'manager', function(){
   return 'This page may only be viewed by managers';
}]);

//KiosksController
//Route::get("kiosks", "KiosksController@index");
//Route::get("kiosks/create", "KiosksController@create");
//Route::post("kiosks", "KiosksController@store");
//Route::get("kiosks/{id}", "KiosksController@show");

//PetsController
//Route::get('pets', 'PetsController@index');
//Route::get('pets/create', 'PetsController@create');
//Route::post('pets', 'PetsController@store');
//Route::get('pets/{id}', 'PetsController@show');
//Route::post('pets/{id}', 'PetsController@delete');
//Route::post('pets/update/{id}', 'PetsController@update');

//PostsController
//Route::resource('posts', 'PostsController');
//Route::auth();
//
Route::get('/home', 'HomeController@index');
