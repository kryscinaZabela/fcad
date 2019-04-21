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
//	dd($r->all());
Post::create($r->all());
    return redirect('/post');	
}
    
}
}
