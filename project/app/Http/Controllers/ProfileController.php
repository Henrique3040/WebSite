<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Posts;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function show()
    {
        $users = User::all();
        return view('users', [
            'users' => $users,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // gaat de naam update als veranderd is
        $user->name = $request->input('name');

        // gaat de email update als veranderd is
        if ($request->user()->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // gaat de foto update als veranderd is of toevogen als er geen foto is
        if ($request->hasFile('foto')) {
            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('images', $fileName, 'public');
            $user->foto = '/storage/'.$path;
        }

        // gaat de bio update als veranderd is
        $user->bio = $request->input('bio');

        // gaat de birthday update als veranderd is
        $user->birthday = $request->input('birthday');

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    public function makeAdmin(Request $request, User $user)
    {
        $user->admin = true;
        $user->save();

        return Redirect::route('users.show')->with('status', 'profile-updated');
    }



    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();


          // Delete associated posts
          Posts::where('user_id', $user->id)->delete();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
