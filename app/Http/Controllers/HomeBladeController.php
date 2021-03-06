<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Paticipant;
use App\Discussion;
use App\Comment;
use App\Reply;
use App\User;
use App\Post;
use App\Place;
use App\Group;
use Session;
use Auth;
use Image;
use File;

class HomeBladeController extends Controller
{
    public function welcome()
    {
      $places =  Place::select('Region','District')->get();
      return view('HomeBladeFiles.welcomePage', compact('places'));
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

        if (isset(request()->user_ocupation)) {

           User::where('id', '=', $user_id->id)->update([
           'user_ocupation' => request()->user_ocupation,

         ]);

         Auth::logout();
         return redirect('/');
        }

        else {
          return redirect()->back();
        }


    }


    public function redirect_after_verification_code()
    {
      return view('HomeBladeFiles.redirect-after-verification-code');
    }

    public function update_profile(User $user_id)
    {
          // dd($user_id);


          // save image
          if (request()->file('avatar')) {


          $mime = request()->file('avatar')->getMimeType();

           if(strstr($mime, "image/")){
             $user_image = request()->file('avatar');
             $filename = time().'.'.$user_image->getClientOriginalExtension();
             Image::make($user_image)->resize(300, 300)->save(public_path('/Uploads/avatars/'.$filename));
             $user = Auth::user();
             $user->avatar = $filename;
             $user ->save();



             //update user avatar in all application conners
             Post::where('User_id', '=', $user_id->id)->update(['User_Image_Profile' => $filename]);
             Discussion::where('Author_ID', '=', $user_id->id)->update(['Author_Image_Name' => $filename]);
             Paticipant::where('Author_ID', '=', $user_id->id)->update(['Author_Image_Name' => $filename]);
             Group::where('Creator_Id', '=', $user_id->id)->update(['Creator_Image_Path' => $filename]);
             Comment::where('user_id', '=', $user_id->id)->update(['user_avatar' => $filename]);
             Reply::where('user_id', '=', $user_id->id)->update(['user_avatar' => $filename]);

             //Delete the Old IMAGE from Public Folder (Save Space)
             File::delete([public_path('/Uploads/avatars/'.$user_id->avatar),]);

           }

           else {
               return redirect()->back();
           }



        }



          return redirect()->back();

  }

}
