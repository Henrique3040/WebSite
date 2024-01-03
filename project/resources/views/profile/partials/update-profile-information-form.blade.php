<section class="update-profile">

    <header>
        <h2 class="">
            {{ __('Profile Information') }}
        </h2>

        <p class="">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    
    <!-- Form for updating profile -->
    <form method="post" action="{{ route('profile.update') }}" class="form-update" enctype="multipart/form-data">
        @csrf
        @method('patch')
    
        <div>
            <img src="{{ $user->foto }}" width="250" height="250" alt="">
        </div>
    
        <div>
            <label for="name">{{ __('Name') }}</label>
            <div>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
            </div>
        </div>
    
        <div>
            <label for="birthday">Birthday</label>
            <div>
                <input type="date" name="birthday" id="birthday" value="{{ old('birthday', $user->birthday) }}">
            </div>
        </div>
    
        <div>
            <label for="foto" class="">{{ __('Foto') }}</label>
            <div class="mt-1 flex items-center">
                <input type="file" name="foto" id="foto" class="form-input block w-full rounded-md shadow-sm">
            </div>
            @error('foto')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    
        <div>
            <label for="bio">About Me</label>
            <textarea name="bio" id="bio">{{ old('bio', $user->bio) }}</textarea>
        </div>
    
        <div>
            <label for="email">{{ __('Email') }}</label>
            <div>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
            </div>
        </div>
    
        <div>
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        </div>
    
    </form>

</section>
