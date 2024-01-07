@extends('layouts.app')

@section('content')
   
<div class="header-post">
    <h1>Posts</h1>
</div>
   @foreach($posts as $post)
        <div id="maincontainer">
           
            
            <div id="rightside">
                
            </div>


            <div id="content">

                <div class="my-style">
                    
        
                        <div class="post-cotainer">
                            
                           
                            <article class="post-kader">
        
                                <header class="post-header">

                                    <div class="user-foto">
                                        <img src="{{ $post ->user->foto }}" width="50px" height="50px" alt="">
                                    </div>
                                    
                                    <div class="header-info">
                                        <p> <a href="{{ route('userProfile.profile' , $post->user->name) }}">{{ $post ->user->name }} </a></p>
                                        <p>posted at {{ $post ->created_at->format('d/m') }}</p>
                                    </div>
                                    
                                    <div>
                                        <div class="dropdown">
                                            <button class="dropbtn">Options</button>
                                            <div class="dropdown-content">

                                                @auth
                                                @if(Auth::user()->id == $post->user_id || Auth::user()->admin )
                                                <a href="{{ route('posts.edit' , ['post' => $post]) }}">Edit</a>
                                                <form method="post" action="{{ route('posts.destroy', ['post' => $post]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Delete"/>
                                                </form>
                                                @endif
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                </header>
        
                                  <div class="post.img">
                                      <img src="{{ $post ->foto }}" width="420px" height="520px" alt="">
                                  </div>
        
                                  <footer class="post-footer">
                                    
                                    <div id="likes">
                                        <a href="{{ route('like', $post->id) }}">like post</a>
                                        <p>likes{{ $post->likes()->count() }}</p>
                                    </div>

                                    <div id="info">
                                     <h2>{{ $post->title }}</h2>
                                     <p>{{ $post->content }}</p>
                                    </div>

                                     <div id="coments">
                                        <p>Comments </p>
                                    </div>
                                  </footer>
                                
                              </div>
                              
                            </article>
                            
        
                        </div>
                      
                </div>
            </div>
        
        
            <div id="leftside">
                
            </div>
        </div>

        @endforeach
   
   @endsection
   
</html>
