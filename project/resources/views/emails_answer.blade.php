@extends('layouts-admin.admin')

@section('content')
    <div class="email-answer-container">
        <h1>Answer</h1>
        <p>Thank you for sending us an email. Hopefully, this answer may help you.</p>
        <p>{{ $answer }}</p>
    </div>
@endsection