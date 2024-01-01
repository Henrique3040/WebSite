@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Introduction</h1>
    <p>This website is the result of the work of one student from Erasmus Brussels University College. This website is the result of my Backend web Laravel project, aiming to make a personal sort of social media.</p>

    <h2>Features</h2>
    <h3>Making posts</h3>
    <ul>
        <li>Make an account to be able to make posts with titles and a caption</li>
        <li>Give posts a like</li>
    </ul>

    <h3>Profile</h3>
    <ul>
        <li>View and update your profile information</li>
        <li>Delete your account from the database</li>
    </ul>

    <h3>Contact</h3>
    <ul>
        <li>Users can send a note to admins from the website</li>
    </ul>

    <h2>Technology Stack</h2>
    <ul>
        <li>Database: MySQL</li>
        <li>Framework: Laravel</li>
    </ul>

    <h2>Links</h2>
    <p>Here are the links that were used to help making this webSite</p>
    <ul>
        <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
        <li><a href="https://laravel.com/docs/10.x">Lravel documetation</a></li>
        <li><a href="https://www.youtube.com/watch?v=_LA9QsgJ0bw">Laravel tutorial</a></li>
        <li><a href="https://github.com/Henrique3040/WebSite">Git Hub</a></li>
    </ul>

</div>

@endsection