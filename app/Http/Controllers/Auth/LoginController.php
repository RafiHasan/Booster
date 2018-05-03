<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function login(Request $request)
    {
       // $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            // Authentication passed...
            return redirect()->intended('/');
        }
        else
        {
            return redirect()->intended('/');
        }
    }

    public function logout()
    {
       Auth::logout();

       return redirect()->intended('/');
        }
    
}
