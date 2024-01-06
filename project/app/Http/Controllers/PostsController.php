<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::latest()->get();
        return view('home',['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request){
       
        $data = $request -> validate([
            'title' => 'required',
            'content' => 'required',
            'foto' => 'required',
            'user_id'
        ]);

        $data['user_id'] = auth()->user()->id;
      
        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('images', $fileName, 'public');
        $data['foto'] = '/storage/'.$path;

       $newpost = Posts::create($data);
       
        return redirect(route('home'));
    }

    public function edit(Posts $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Posts $post)
    {
        $data = $request -> validate([
            'title' => 'required',
            'content' => 'required',
            'foto'
        ]);

        if($request->hasFile('foto')){
            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('images', $fileName, 'public');
            $data['foto'] = '/storage/'.$path;
        }
      
        $post->update($data);
        return redirect(route('home'))->with('success', 'Post updated successfully');
    }

    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect(route('home'))->with('success', 'Post deleted successfully');
    }
}
