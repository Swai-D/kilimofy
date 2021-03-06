<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Group;
use App\Post;
use App\User;
use Auth;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_user_page(User $user_id)
    {

        $user = User::where('id', '=', $user_id->id)->get();

        return view('UserBladeFiles.about-user', compact('user', 'slug'));
    }



    public function user_timeline_page(User $user_id)
    {
        $user = User::where('id', '=', $user_id->id)->get();
        // dd($user);
        return view('UserBladeFiles.user-timeline', compact('user'));
    }



    public function user_friends_page(User $user_id)
    {
      $users = User::all();
      $users_count = User::count();
      $user = User::where('id', '=', $user_id->id)->get();
        return view('UserBladeFiles.user-friends', compact('users', 'users_count', 'user'));
    }



    public function user_groups_page(User $user_id)
    {
        $group_lists = Group::all();
        $group_lists_count = Group::count();
        $user = User::where('id', '=', $user_id->id)->get();
        return view('UserBladeFiles.user-groups', compact('group_lists', 'group_lists_count', 'user'));
    }

    public function user_photos_page(User $user_id)
    {
        $user = User::where('id', '=', $user_id->id)->get();

        foreach ($user as $user_details) {
          $user_id = $user_details['id'];
        }


        if (isset($user_id)) {
          $user_photo_gallery = Post::where([['User_id', '=', $user_id], ['Photo','!=', NULL]])->inRandomOrder()->get();
          // dd($user_photo_gallery);
          $user_latest_photo = Post::where([['User_id', '=', $user_id], ['Photo','!=', NULL]])->inRandomOrder()->limit(10)->get();
          $user_latest_photo_count = Post::where([['User_id', '=', $user_id], ['Photo','!=', NULL]])->count();
          return view('UserBladeFiles.user-photos', compact('user_photo_gallery','user', 'user_latest_photo', 'user_latest_photo_count'));

        }
    }


    public function user_videos_page(User $user_id)
    {
      $user = User::where('id', '=', $user_id->id)->get();

      foreach ($user as $user_details) {
        $user_id = $user_details['id'];
      }

      if (isset($user_id)) {
        $user_latest_video = Post::where([['User_id', '=', $user_id], ['Video','!=', NULL]])->inRandomOrder()->get();
        $user_latest_video_count = Post::where([['User_id', '=', $user_id], ['Video','!=', NULL]])->count();

        return view('UserBladeFiles.user-videos', compact('user_latest_video', 'user_latest_video_count', 'user'));
      }
    }

    public function user_blog_page(User $user_id)
    {   $user = User::where('id', '=', $user_id->id)->get();
        return view('UserBladeFiles.user-blog', compact('user'));
    }

    public function user_blog_post_page(User $user_id)
    {    $user = User::where('id', '=', $user_id->id)->get();
        return view('UserBladeFiles.user-blog-post', compact('user'));
    }

    public function user_forum_page(User $user_id)
    {   $user = User::where('id', '=', $user_id->id)->get();
        $user_discussions = Discussion::where('Author_ID', '=', $user_id->id)->get();
        // dd($user_discussions);
        return view('UserBladeFiles.user-forum', compact('user', 'user_discussions'));
    }

    public function user_store_page(User $user_id)
    {
        $user = User::where('id', '=', $user_id->id)->get();
        return view('UserBladeFiles.user-store', compact('user'));
    }

    public function user_setting_page()
    {
        return view('UserBladeFiles.user-settings');
    }



  //Vi

}
