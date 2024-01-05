@extends('layouts-admin.admin')


@section('content')



<div class="FAQs-panel">
    <h1>Create FAQs page </h1>

    @include('FAQ.partials.add')

  

    @include('FAQ.partials.categoriesTables')

    @include('FAQ.partials.faqsLayout')

</div>



@endsection