<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


    <h1>User message</h1>

    @foreach($contacts as $contact)

    <p>User: {{ $contact ->name }}</p>
    <p>Email: {{ $contact ->email }}</p>
    <p>Subject {{ $contact ->subject }}</p>
    <p>Message: {{ $contact ->message }}</p>


    @endforeach



</body>
</html>