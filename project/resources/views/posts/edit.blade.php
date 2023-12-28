<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Post</h1>
    <div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>    
                    @endforeach
                </ul>

                @endif
            </div>
    </div>
    <form method="post" action="{{ route('posts.update', ['post' => $post]) }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="title" placeholder="title" value="{{ $post->title }}"/>
        </div>

        <div>
            <label for="">Content</label>
            <input type="text" name="content" placeholder="content" value="{{ $post->content }}"/>
        </div>

        <div>
            <label for="">Foto</label>
            <input type="file" name="foto" placeholder="foto" value="{{ $post->foto }}"/>
        </div>

        <div>
            <input type="submit" value="Update Post"/>
        </div>
    </form>

</body>
</html>