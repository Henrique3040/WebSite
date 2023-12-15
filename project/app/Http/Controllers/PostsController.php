<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('posts.home',['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request){
       
        $data = $request -> validate([
            'title' => 'required',
            'content' => 'required',
            'foto' => 'required'
        ]);

        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('images', $fileName, 'public');
        $data['foto'] = '/storage/'.$path;

       $newpost = Posts::create($data);
       
        return redirect(route('posts.home'));
    }
}
