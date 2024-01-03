<section class="update-password-section">

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="update-password-form">
        @csrf
        @method('put')

        <div class="form-group">
            <!-- Autocomplete == current-password-->
            <label for="current-password">Current Password</label>
            <input id="current-password" type="password" name="current_password" required autocomplete="current-password" class="form-input">
        </div>

        <div class="form-group">
            <!-- Autocomplete == new-password-->
            <label for="new-password">New Password</label>
            <input id="new-password" type="password" name="password" required autocomplete="new-password" class="form-input">
        </div>

        <div class="form-group">
            <!-- Autocomplete == new-password-->
            <label for="confirm-password">Confirm Password</label>
            <input id="new-password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="form-input">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                {{ __('Update Password') }}
            </button>
        </div>

        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') == 'password-updated' ? __('Password updated successfully!') : '' }}
        </div>
    @endif

    </form>
</section>
