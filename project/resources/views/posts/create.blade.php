<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

@include('layouts.navigatiebar')
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

</body>
</html>