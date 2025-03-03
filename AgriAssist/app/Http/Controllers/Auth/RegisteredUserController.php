<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'middleName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'min:2', 'max:20'],
            'suffix' => ['nullable','string', 'max:5',],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'min:8', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:vendor,distributor'],
        ]);

        $user = User::create([
            'firstName' => $request->input('firstName'),
            'middleName' => $request->input('middleName'),
            'lastName' => $request->input('lastName'),
            'suffix' => $request->input('suffix'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false)) -> with('success', 'Registration Successful');
    }
}
