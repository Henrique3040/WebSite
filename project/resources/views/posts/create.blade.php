@extends('layouts.app')

 @section('content')
   
    <div class="create-post">

        <h1>Make a Post</h1>
   <div class="form-post">
     <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label for="">Name</label>
            <input type="text" name="title" placeholder="title"/>
        </div>

        <div>
            <label for="">Content</label>
            <input type="text" name="content" placeholder="content"/>
        </div>

        <div>
            <label for="">Foto</label>
            <input type="file" name="foto" placeholder="foto"/>
        </div>

        <div>
            <input type="submit" value="Make a New Post"/>
        </div>
     </form>

   </div>
 </div>

    @endsection
