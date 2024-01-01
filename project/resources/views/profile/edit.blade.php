
@extends('layouts.app')

@section('content')
    
    
        <div class="profile-container">
          
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            

            
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            

                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            
        </div>
    
@endsection
