<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;
use App\Models\Posts;


class LikesController extends Controller
{
    //

    public function like($postId,Request $request){

        $post = Posts::findOrFail($postId);

        $like = Likes::where('posts_id', $post->id)->where('user_id', auth()->user()->id)->first();

        if($like != NULL){
            abort(403, 'You already liked this post');
        }
     
        $data = new Likes;

        $data['user_id'] = auth()->user()->id;
        $data['posts_id'] = $postId;

        $data->save();

        return redirect(route('home') . '#your-anchor');
    }
}
