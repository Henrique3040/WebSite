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
        <li>Visit others user profile page</li>
    </ul>

    <h3 class="about-subsubheading">Profile</h3>
    <ul class="about-list">
        <li>View and update your profile information</li>
        <li>Delete your account from the database</li>
        <li>Change you password if needed</li>
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
        <li>
            <a href="https://getbootstrap.com/">Bootstrap</a>
            <p>I have use bootstrap for inspiration for desing</p>
        </li>

        <li>
            <a href="https://laravel.com/docs/10.x">Laravel Documentation</a>
            <p>The laravel documation was very usefull for the coding part and for the use from the data base</p>
        </li>

        <li>
            <a href="https://www.youtube.com/watch?v=_LA9QsgJ0bw">Laravel Tutorial</a>
            <p>This tutorial next to the documation have also be usefull, I did use for beter understanding from how laravel works</p>
        </li>

        <li>
            <a href="https://github.com/Henrique3040/WebSite">GitHub Repository</a>
            <p>This is the link to may git, whre you can see the hole code</p>
        </li>

            <li>
                <a href="https://chat.openai.com/">ChatGPT</a>
                <p>ChatGPT was very usefull the help find code errors and understand errors messages also did help a lot with the desing part since I'm not good at all</p>
            </li>

            <li>
                <a href="https://ehb.instructuremedia.com/embed/edeb8a9e-3e8f-4af3-85f9-8be5ae754e7d">Tutorial Guestbook</a>
                <p>I used this tutorial to have some ispirations and also did help with beter understanding from migrations and the use of models and controllers</p>
            </li>

            <li>
                <a href="https://www.w3schools.com/">W3Schools</a>
                <p>I did use W3Schools also for hulp with the desing part</p>
            </li>
    </ul>

</div>

@endsection