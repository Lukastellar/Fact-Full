<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
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

}
