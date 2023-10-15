<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function registerPost(Request $request) {
        $messages = [
            'phone.unique' => 'This number is already registered.',
        ];
        $request->validate([
            'phone' => [
                'required',
                Rule::unique('users', 'phone'),
                'size:10',
            ],
            'password' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ], $messages);

        $user = new User();
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->with('success', 'Register successfully');
    }
}