<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function login_post(Request $request){

        $credentials = $request->only('name', 'password');

        $validator = Validator::make($credentials, [
            'name' => 'required|string|exists:users,name|max:36',
            'password' => 'required|string',
        ])->validate();

        if( Auth::attempt($credentials, $request->get('remember')) ){
            return redirect()->intended( route('dashboard') )->with('greetings', 'Hey glad to see you back! :)');
        }

        return 'Something went wrong, oops!';
    }

}
