<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\User;
use App\Comment;
use App\Reply;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create_status(Request $request)

     {

       $data = $request->Caption;



       if (isset($data)) {
         $post = new Post();
         $post->Caption = $request->Caption;
         $post->Tag1 = $request->Tag1;
         $post->Tag2 = $request->Tag2;
         $post->Tag3 = $request->Tag3;
         $post->User_id = $request->User_id;
         $post->User_Name = $request->User_Name;
         $post->User_Image_Profile = $request->User_Image_Profile;

         if (isset($request->File)) {

         $mime = $request->file('File')->getMimeType();

          if(strstr($mime, "video/")){
            $post_video = Input::file('File');
            $post_video_name = time().'.'.$post_video->getClientOriginalExtension();
            $path = public_path().'/Uploads/PostVideos/';
            $post_video->move($path, $post_video_name);
            $post->Video = $post_video_name;
            //dd("It Works");
          }

          else if(strstr($mime, "image/")){
            $post_image = $request->file('File');
            $filename = time().','.$post_image->getClientOriginalExtension();
            Image::make($post_image)->resize(528, 280)->save(public_path('/Uploads/PostPhotos/'.$filename));
            $post->Photo = $filename;
          }

        }
         $post->save();

   }




       return redirect()->back();
     }


    public function blog_post_index()
    {
        return view('PostBladeFiles.blog-post');
    }

    public function poll_option(Request $request)
        {
            if (Auth::check()) {
              $poll_option = $request->Caption;
               dd($poll_option);
            }
            dd('Hellow');

        return view('PostBladeFiles.blog-post');
    }

    public function user_quick_post(Request $request)
    {
        $user_post = $request->user_post;
        dd($user_post);
        // return view('BlogPostBladeFiles.blog-post');
    }

    public function read_comments(Post $post_id)
    {
        // dd($post_id);
        $post_details = Post::where('id', '=', $post_id->id)->get();
        //dd($post_details);
        $author =  User::where('id', '=',$post_id->User_id)->get();
        Session::put('post_id', $post_id->id);
        return view('PostBladeFiles.post-comments', compact('post_details', 'author'));
    }


    public function send_comments(Request $request)
    {
      // dd($request->comment);
       $data = new Comment();
       $data->comment =  $request->comment;
       $data->user_name =  $request->user_name;
       $data->user_id =  $request->user_id;
       $data->user_avatar =  $request->user_avatar;
       $data->post_id =  $request->post_id;

       $original_comment = Post::where('id', '=', $request->post_id)->get();
       if (isset($original_comment)) {
         foreach ($original_comment as $comment) {
          $original_comment = $comment['Comments'];
         }
       }
       // dd($original_comment);
       $updated_comment = $original_comment + 1;
       Post::where('id', '=', $request->post_id)->update([
         'Comments' => $updated_comment,
       ]);

       $data->save();


       return redirect()->back();
    }



    public function reply_comment(Comment $comment_id)
    {
       // dd($comment_id);
      $comment_to_be_replied = Comment::where('id', '=', $comment_id->id)->get();
      return view('PostBladeFiles.reply-comments', compact('comment_to_be_replied'));
    }

    public function reply_comment_create(Request $request )
    {
      // dd($request);
      $reply = new Reply();
      $reply->comment_id = $request->reply_comment_id;
      $comment_id = $request->reply_comment_id;
      $reply->user_name = $request->user_name;
      $reply->user_avatar = $request->user_avatar;
      $reply->reply = $request->reply_comment;
      $reply->save();

      $redirect_id = Session::get('post_id');



      return redirect('/kilimofy/Post/read_comments/'.$redirect_id);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
