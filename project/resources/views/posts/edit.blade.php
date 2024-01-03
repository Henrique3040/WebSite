
@extends('layouts.app')

@section('content')

<div class="post-section">

    <h1>Edit a Post</h1>

    <div class="error-messages">
        @if ($errors->any())
            <div class="error-container">
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form method="post" action="{{ route('posts.update', ['post' => $post]) }}" enctype="multipart/form-data" class="edit-post-form">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="title" id="title" placeholder="Title" value="{{ $post->title }}" class="form-input">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" name="content" id="img-post" placeholder="Content" value="{{ $post->content }}" class="form-input">
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-input">
        </div>

        <div class="form-group-submit">
            <input type="submit" value="Update Post" class="btn btn-primary">
        </div>
    </form>

</div>


@endsection