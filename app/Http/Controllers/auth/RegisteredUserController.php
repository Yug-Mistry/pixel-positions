<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedUser = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $validatedEmployer = $request->validate([
            'employer_name' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'image', 'max:1024'],
        ]);

        $user = User::create($validatedUser);

        $path = $request->file('logo')->store('logos');

        $user->employer()->create([
            'name' => $validatedEmployer['employer_name'],
            'logo' => $path,
        ]);

        Auth::login($user);

        return redirect()->route('jobs.index');
    }
}
