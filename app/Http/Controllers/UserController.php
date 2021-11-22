<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function login_post(Request $request){
        $body = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if(!Auth::attempt($body)){
            return 'Try again, maybe you mistyped something! :/';
        }
        return 'Hey, you logged in! Enjoy :)';

    }
    public function register(){
        return view('pages.register');
    }

    public function register_post(Request $request){
        $user = User::where('email', $request->email)->first();

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'password' => 'required|string',
        ]);

        if( !$user ){
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            $token = $user->createToken($data['name'])->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];

            return 'Logged in!';
        }
        return 'User with ' . $request->email . ' already exists';

    }
}
