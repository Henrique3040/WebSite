@extends('layouts.app')

    <body class="antialiased style">

        @include('layouts.navigatiebar')
     <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
     </div>
         

        <div id="maincontainer">
           
            
            <div id="rightside">
                
            </div>
            <div id="content">
                <div class="my-style">
                    
        
                        <div class="post-cotainer">
                            <h1>Posts</h1>
                            @foreach($posts as $post)
                            <article class="post-kader">
        
                                <header class="post-header">

                                    <div>
                                        <img src="{{ $post ->foto }}" width="50px" height="50px" alt="">
                                    </div>
                                    
                                    <div class="header-info">
                                        <p>user:</p>
                                        <p>{{ $post ->created_at }}</p>
                                    </div>
                                    
                                    @auth
                                    @if(! Auth::user()->admin)
                                    <div>
                                        <div class="dropdown">
                                            <button class="dropbtn">Options</button>
                                            <div class="dropdown-content">
    
                                                <a href="{{ route('posts.edit' , ['post' => $post]) }}">Edit</a>
                                                <form method="post" action="{{ route('posts.destroy', ['post' => $post]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Delete"/>
                                                    
                                                </form>
                                              
                                            </div>
                                        </div>
                                    </div>

                                    @endif
                                    @endauth

                                        @auth
                                        @if(Auth::user()->admin)
                                        <div>
                                            <div class="dropdown">
                                                <button class="dropbtn">Options</button>
                                                <div class="dropdown-content">
        
                                                    <a href="{{ route('posts.edit' , ['post' => $post]) }}">Edit</a>
                                                    <form method="post" action="{{ route('posts.destroy', ['post' => $post]) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="Delete"/>
                                                        
                                                    </form>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                       @endif
                                       @endauth
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
                            @endforeach
        
                        </div>
                      
                </div>
            </div>
        
        
            <div id="leftside">
                
            </div>
        </div>

    </body>
</html>
