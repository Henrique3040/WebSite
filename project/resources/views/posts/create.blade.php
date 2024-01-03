@extends('layouts.app')

 @section('content')
   
 <div class="post-section">

    <h1>Make a Post</h1>

    <div class="form-post-container">
        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="form-post">
            @csrf
            @method('post')
            
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="title" id="title" placeholder="Title" class="form-input">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" name="content" id="img-post" placeholder="Content" class="form-input">
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-input">
            </div>

            <div class="form-group-submit">
                <input type="submit" value="Make a New Post" class="btn btn-primary">
            </div>
        </form>
    </div>

</div>


    @endsection
