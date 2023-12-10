<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Make a Post</h1>
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
    <form method="post" action="{{ route('posts.store') }}">
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
            <input type="submit" value="Make a New Post"/>
        </div>
    </form>

</body>
</html>