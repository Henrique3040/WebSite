<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>make admin</th>
    </tr>

    @foreach($users as $user)

    @unless($user->admin)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td> {{ $user->email }}</td>
        <td>
            <form method="post" action="{{ route('users.makeAdmin', ['user' => $user->id]) }}">
                @csrf
                @method('put')
                <button type="submit">Make admin</button>
            </form>
        </td>
    </tr>
    @endunless
 

    @endforeach
    </table>
</body>
</html>