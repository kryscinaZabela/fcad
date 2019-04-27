<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
	public function postAdd(PostRequest $r){

if (!Auth::guest()){
	$r['user_id']=Auth::user()->id;
	$r['user_name']=Auth::user()->name;
	$r['user_email']=Auth::user()->email;

//	dd($r->all());
Post::create($r->all());
    return redirect('/post');
}

}
}
