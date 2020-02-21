<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function enviar(Request $request)
    {   
         $post=$request->input("text");
         $titulo=$request->input("titulo");
         $i=new postModel();
         $i->insert($post,$titulo);
         return view("home");
    }

    public function getPosts(){
        $i=new postModel();
        $a=$i->posts();
        return view("posts",['a'=>$a]);
    }
}
