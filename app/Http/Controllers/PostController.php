<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function blog_post_index()
    {
        return view('PostBladeFiles.blog-post');
    }

    public function poll_option(Request $request)
    {
       $poll_option = $request->poll_option;
        dd($poll_option);
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
        //dd($post_id);
        $post_details = Post::where('id', '=', $post_id->id)->get();
        $author =  User::where('id', '=',$post_id->User_id)->get();
        Session::put('post_id', $post_id->id);
        return view('PostBladeFiles.post-comments', compact('post_details', 'author'));
    }


    public function send_comments(Request $request)
    {
      // dd($request->comment);
       $data = new Comment();
       $data->comment =  $request->comment;
       $data->post_id =  $request->post_id;
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
     public function create(Request $request)

     {

       $post = new Post();
       $post->Heading = $request->Heading;
       $post->Tag1 = $request->Tag1;
       $post->Tag2 = $request->Tag2;
       $post->Tag3 = $request->Tag3;
       $post->Tag4 = $request->Tag4;
       $post->User_id = $request->User_id;
       $post->Description = $request->Description;

       //save Media
       if($request->hasFile('Media')){
         //dd($request->file('Media'));

             $post_image = $request->file('Media');
             $filename = time().','.$post_image->getClientOriginalExtension();
             Image::make($post_image)->resize(200, 200)->save(public_path('/Uploads/PostMedia/'.$filename));
             $post->Media = $filename;
           }
       $post->save();

       return redirect()->back()->with('post_message','Post sent succesfuly !');
     }



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
