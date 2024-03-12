<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{    //return response()->json();
     public function authenticate(LoginRequest $request)
     {
        $credentials = $request->only('email','password');
        //return response()->json(bcrypt($request->password));
        if(Auth::attempt($credentials))
        {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        return redirect()->back()->with('status', 'Oops! Wrong combination of email and password.');
     }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
