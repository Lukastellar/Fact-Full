<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function register_post(Request $request){

        $validator = Validator::make($request->input(), [
            'name' => 'required|unique:users,name|max:36',
            'email' => 'required|email:rfc|unique:users,email|max:255',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required'
        ])->validate();

        User::create([
            'name' => $validator['name'],
            'email' => $validator['email'],
            'password' => Hash::make($validator['password']),
        ]);

        return redirect()->route('dashboard');
    }
}
