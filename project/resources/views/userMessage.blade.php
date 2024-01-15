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

     <!-- Add a form to allow administrators to respond -->
     <form action="{{ route('admin.answer.store') }}" method="post">
        @csrf
        <input type="hidden" name="email" value="{{ $contact->email }}">
        <textarea name="answer" placeholder="Enter your response"></textarea>
        <button type="submit">Send Response</button>
    </form>
    
</div>

    @endforeach

    @endsection
</div>
