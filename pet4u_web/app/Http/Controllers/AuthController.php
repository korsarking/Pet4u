<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function register()
    {
        return view("auth.register");
    }

    public function registerPost(Request $req)
    {
        $data = $req->validate([
            "username"=>["required", "string"],
            "email"=>["required", "email", "unique:users,email"],
            "password"=>["required",  "string", "min:8", "confirmed"],
            "organization_name"=>["nullable", "string"],
            "avatar_url"=>["nullable", "string"],
            "bio"=>["nullable", "string"],
        ]);

        $data["password"] = Hash::make($data["password"]);

        // check if there is an image in request and save in public
        if ($req->hasFile('avatar_url')) {
            $path = $req->file('avatar_url')->store('avatars', 'public');
            $data['avatar_url'] = $path;
        }

        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('home');
    }

        public function loginPost(Request $req)
        {
            $data = $req->validate([
                "login"=>["required", "string"],
                "password"=>["required", "string"]
            ]);

            $login = $data['login'];
            $password = $data['password'];
            
            // check if login is email or username
            $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            // retrieve a single user record from the database.
            $user = User::where($field, $login)->first();

            // No such username/email
            if (! $user) {
                return back()->withErrors([
                    'login' => ucfirst($field) . ' not found.',
                ])->onlyInput('login');
            }

            // Check password validity
            if (! Hash::check($password, $user->password)) {
                return back()->withErrors([
                    'password' => 'Incorrect password.',
                ])->onlyInput('login');
            }

            // Everything ok — log in user
            Auth::login($user);
            $req->session()->regenerate();

            return redirect()->route('home');
        }

        public function logoutPost(Request $req)
        {
            // Invalidate the current session
            Auth::logout(); 

            // Invalidate the session
            $req->session()->invalidate(); 

            // Regenerate the CSRF token
            $req->session()->regenerateToken(); 

            return redirect()->route('home');
        }
}
