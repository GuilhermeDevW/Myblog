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

     private $model;
    public function __construct()
    {
        $this->middleware('auth');
        $this->model=new postModel();
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
         $this->model->insert($post,$titulo);
         return view("home");
    }

    public function getPosts()
    {
        $a=$this->model->posts();
        return view("posts",['a'=>$a]);
    }

    public function materia(Request $request)
    {
        $g=$request->input('id');
        $h=$this->model->materia($g);     
        return view('update' ,['h'=>$h]);
    }

    public function materiaUpdate(Request $request){
         $id=$request->input('id');
         $post=$request->input('text');
         $titulo=$request->input('titulo');
         $this->model->materiaUpdate($id,$post,$titulo);
        return redirect('/posts');
    }

    public function delet(Request $request){
        $id=$request->input('id');
        $this->model->delet($id);
        return redirect('/posts');
    }
}
