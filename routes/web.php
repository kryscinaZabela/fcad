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

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/post', function () {
    return view('/post');
});


Route::post('/post', 'PostController@postAdd');

Route::delete('/post/{id}', function ($id) {
    Post::findOrFail($id)->delete();
    return redirect('/post');
});

Route::get('/post', function () {
  $tasks = Post::orderBy('created_at', 'asc')->get();
  return view('post', [
      'posts' => $tasks
  ]);
});


Route::get('/bogomaz', function () {
    return view('/bogomaz');
});
Route::get('/gaids', function () {
    return view('/gaids');
});
Route::get('/ganakova', function () {
    return view('/ganakova');
});
Route::get('/kotuhov', function () {
    return view('/kotuhov');
});
Route::get('/krakasevich', function () {
    return view('/krakasevich');
});
Route::get('/lihachevskyi', function () {
    return view('/lihachevskyi');
});
Route::get('/mariyali', function () {
    return view('/mariyali');
});
Route::get('/prepods', function () {
    return view('/prepods');
});
Route::get('/shatalova', function () {
    return view('/shatalova');
});
Route::get('/studactiv', function () {
    return view('/studactiv');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
