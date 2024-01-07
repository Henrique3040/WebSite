@extends('layouts.app')

@section('content')

<div class="container-about">

    <h1 class="about-heading">Introduction</h1>
    <p class="about-paragraph">This website is the result of the work of one student from Erasmus Brussels University College.
         This website is the result of my Backend web Laravel project, aiming to make a personal sort of social media.
        The name of the website is SYFMs (Save you favorite memory).</p>

    <h2 class="about-subheading">Features</h2>
    <h3 class="about-subsubheading">Making posts</h3>
    <ul class="about-list">
        <li>Make an account to be able to make posts with titles and a caption</li>
        <li>Give posts a like</li>
    </ul>

    <h3 class="about-subsubheading">Profile</h3>
    <ul class="about-list">
        <li>View and update your profile information</li>
        <li>Delete your account from the database</li>
    </ul>

    <h3 class="about-subsubheading">Contact</h3>
    <ul class="about-list">
        <li>Users can send a note to admins from the website</li>
    </ul>

    <h2 class="about-subheading">Technology Stack</h2>
    <ul class="about-list">
        <li>Database: MySQL</li>
        <li>Framework: Laravel</li>
    </ul>

    <h2 class="about-subheading">Links</h2>
    <p class="about-paragraph">Here are the links that were used to help in making this website</p>
    <ul class="about-link-list">
        <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
        <li><a href="https://laravel.com/docs/10.x">Laravel Documentation</a></li>
        <li><a href="https://www.youtube.com/watch?v=_LA9QsgJ0bw">Laravel Tutorial</a></li>
        <li><a href="https://github.com/Henrique3040/WebSite">GitHub Repository</a></li>
    </ul>

</div>

@endsection