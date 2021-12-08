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
        $user = User::where('email', $request->email)->first();

        $validator = Validator::make($request->input(), [
            'name' => 'required|unique:users,name',
            'email' => 'required|email:rfc|unique:users,email',
            'password' => 'required|confirmed|string',
            'password_confirmation' => 'required'
        ]);

        if($validator->fails()){
            return back()
                ->with(['err_true' => true])
                ->withErrors($validator, 'login');
        }
        if( !$user ){
            User::create([
                'name' => $validator['name'],
                'email' => $validator['email'],
                'password' => Hash::make($validator['password']),
            ]);
            return 'Logged in!';
        }
        return 'User with ' . $request->email . ' already exists';

    }
}
