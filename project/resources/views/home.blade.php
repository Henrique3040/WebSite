@extends('layouts.app')

@section('content')
   
   @foreach($posts as $post)
        <div id="maincontainer">
           
            
            <div id="rightside">
                
            </div>


            <div id="content">

                <div class="my-style">
                    
        
                        <div class="post-cotainer">
                            <h1>Posts</h1>
                           
                            <article class="post-kader">
        
                                <header class="post-header">

                                    <div class="user-foto">
                                        <img src="{{ $post ->user->foto }}" width="50px" height="50px" alt="">
                                    </div>
                                    
                                    <div class="header-info">
                                        <p>{{ $post ->user->name }}</p>
                                        <p>{{ $post ->created_at }}</p>
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
                                     <h2>{{ $post->title }}</h2>
                                     <p>{{ $post->content }}</p>
                                     
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
