<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Maintext;
class PageController extends Controller
{
    public function getIndex($id=null){
      $obj=Maintext::where('url',$id)->first();
      return view ('page',compact('obj'));
    }
}
