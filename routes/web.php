<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

// /resources/views/pages was created to post to
// Route::get('/about', function () {
//     // return view('pages.about');
//     return view('pages/about');
// });

// This is how you put a variable in the url. You can have multiple variables
Route::get('/users/{id}/{name}', function ($id, $name) {
    return "This is user ".$name." with an id of ".$id;
});

Route::get('/', 'PagesController@Index');
Route::get('/about', 'PagesController@About');
Route::get('/services', 'PagesController@Services');
