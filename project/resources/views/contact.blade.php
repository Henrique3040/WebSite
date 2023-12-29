<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="{{ route('contact.store') }}">
        @csrf
        @method('post')

        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="subject" placeholder="subject">
        <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
        <button type="submit">Submit</button>
    </form>


</body>
</html>