@extends('layouts.app')
@section('content')
    
    <table border="1">
        <tr>
            <th colspan="4">Users</th>
        </tr>
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


    <table border="4">
        <tr>
            <th colspan="4">Admins</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    
        @foreach($users as $user)
    
        @if($user->admin)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td> {{ $user->email }}</td>
        </tr>
        @endif
     
    
        @endforeach
        </table>
    

<div>
    <form method="post" action="{{ route('register.admin') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
      <div>
           <input type="text" name="name" placeholder="name">
      </div>

        <div>
        <input type="email" name="email" placeholder="email">
        </div>

        <div>
        <input type="password" name="password" placeholder="password">
        </div>

        <div>
        <input type="password" name="password_confirmation" placeholder="password_confirmation">
        </div>

        <div>
        <button type="submit">Register</button>
        </div>
    </form>

</div>

@endsection