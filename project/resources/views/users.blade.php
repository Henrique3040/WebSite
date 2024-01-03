@extends('layouts.app')
@section('content')
    
<div class="container-users">

    <!-- Users Table -->
    <div class="table-container">
        <h2>Users</h2>
        <table border="1">
            <tr>
                <th colspan="4">Users</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Make Admin</th>
            </tr>
            @foreach($users as $user)
                @unless($user->admin)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form method="post" action="{{ route('users.makeAdmin', ['user' => $user->id]) }}" class="admin-form">
                                @csrf
                                @method('put')
                                <button type="submit" class="btn btn-primary">Make Admin</button>
                            </form>
                        </td>
                    </tr>
                @endunless
            @endforeach
        </table>
    </div>

    <!-- Admins Table -->
    <div class="table-container">
        <h2>Admins</h2>
        <table border="1">
            <tr>
                <th colspan="3">Admins</th>
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
                        <td>{{ $user->email }}</td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>

    <!-- Register Admin Form -->
    <div class="register-form">
        <h2>Register Admin</h2>
        <form method="post" action="{{ route('register.admin') }}" enctype="multipart/form-data" class="admin-form">
            @csrf
            @method('post')
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-input">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-input">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-input">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-input">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

</div>

@endsection