<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_user_page()
    {
        return view('UserAccountBladeFiles.about-user');
    }

    public function user_timeline_page()
    {
        return view('UserAccountBladeFiles.user-timeline');
    }

    public function user_friends_page()
    {
        return view('UserAccountBladeFiles.user-friends');
    }

    public function user_groups_page()
    {
        return view('UserAccountBladeFiles.user-groups');
    }

    public function user_photos_page()
    {
        return view('UserAccountBladeFiles.user-photos');
    }

    public function user_videos_page()
    {
        return view('UserAccountBladeFiles.user-videos');
    }

    public function user_setting_page()
    {
        return view('UserAccountBladeFiles.user-settings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
