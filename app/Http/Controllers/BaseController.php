<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
use App\Models\post;

class BaseController extends Controller
{
    //
    function home(){
        $data=page::where('page_title','home')->get();
        $post=post::where('page_title','home')->get();
        return view('home',['data'=>$data,'post'=>$post]);
    }
    function company(){
        $data=page::where('page_title','company')->get();
        $post=post::where('page_title','company')->get();
        return view('company',['data'=>$data,'post'=>$post]);
    }
    function services(){
        $data=page::where('page_title','Services')->get();
        $post=post::where('page_title','services')->get();
        return view('services',['data'=>$data,'post'=>$post]);
    }
    function contact(){
        $post=post::where('page_title','contact')->get();
        return view('contact',['post'=>$post]);
    }
}
