@extends('layouts-admin.admin')

@section('content')
    
<div class="user-message-container">
<h1>User message</h1>
<p>All the messages from contact page are here backt to find</p>

@foreach($contacts as $contact)

<div class="message-panel">
   

   

    <div class="user-info">
     <p>User: {{ $contact ->name }}</p>
     <p>Email: {{ $contact ->email }}</p>
    </div>

    <div class="message">
     <p>Subject {{ $contact ->subject }}</p>
     <p>Message: {{ $contact ->message }}</p>
    </div>
    
</div>

    @endforeach

    @endsection
</div>
