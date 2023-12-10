<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.home');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request){
       
        $data = $request -> validate([
            'title' => 'required',
            'content' => 'required',
        ]);

       $newpost = Posts::create($data);
       
        return redirect(route('posts.home'));
    }
}
