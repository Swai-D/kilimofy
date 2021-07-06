<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Post;
use App\Survey;
use Session;
use Auth;

class HomeBladeController extends Controller
{
    public function welcome()
    {
      $regions = Survey::select('Region')->groupBy('Region')->get();
      return view('HomeBladeFiles.welcomePage', compact('regions'));
    }

    public function index()
    {

      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('HomeBladeFiles.index', compact('posts', 'user_location'));

    }

    public function verify()
    {
      $std_user_phone_number = Session::get('std_user_phone_number');
      $error = Session::get('error');
      return view('HomeBladeFiles.verify', compact('std_user_phone_number', 'error'));
    }

    public function switch_account(User $user_id)
    {
        User::where('id', '=', $user_id->id)->update([
          'user_ocupation' => request()->user_ocupation,
        ]);
        Auth::logout();
        return redirect('/');
    }

    public function redirect_after_verification_code()
    {
      return view('HomeBladeFiles.redirect-after-verification-code');
    }
}
