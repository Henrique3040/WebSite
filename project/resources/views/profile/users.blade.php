@extends('layouts.app')

@section('content')



<div class="profileKader">


    <h1>Pofile from {{ $user->name }}</h1>


    <div class="profileFoto">
        <img src="{{ $user->foto }}" width="200px" height="200px" alt="">
    </div>

    <div class="profileInfo">
        <p>Username: {{ $user->name }}</p>

        <p>About: {{ $user->bio }}</p>
       
        <p>Joined: {{ $user->created_at->format('d/m/Y') }}</p>

        <p>Posts: {{ $user->posts->count() }}</p>
    </div>


    <h2>Maded Posts</h2>

    <div class="UserPost">
    @foreach($user->posts as $post)

  

        <div class="postImg">

        
    <img src="{{ $post->foto }}" alt="">
    
       </div>

   
   

    @endforeach
</div>
   


</div>


@endsection