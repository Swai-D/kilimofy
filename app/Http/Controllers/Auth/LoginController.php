<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /* @POST
*/
    public function login(Request $request){
        $this->validate($request, [
            'user_name' => 'required|string',
            'password' => 'required',
            ]);

        if (\Auth::attempt([
            'user_name' => $request->user_name,
            'password' => $request->password])
        )
        {
            return redirect('/home');
        }

        return redirect('/')->with('error', 'Invalid Email address or Password');
    }
    /* GET
    */
    public function logout(Request $request)
    {
        if(\Auth::check())
        {
            \Auth::logout();
            $request->session()->invalidate();
        }

        return  redirect('/');
    }
}
