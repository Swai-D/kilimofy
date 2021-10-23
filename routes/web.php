<?php



//**************************HomeBladeController*********************************
Route::get('/', 'HomeBladeController@welcome');
Route::get('/kilimofy/home/verify', 'HomeBladeController@verify')->name('verify');
Route::post('kilimofy/Change-Account/{user_id}', 'HomeBladeController@switch_account');
Route::post('kilimofy/Change-Profile/{user_id}', 'HomeBladeController@update_profile');
Route::get('/kilimofy/home/redirect-after-verify-code', 'HomeBladeController@redirect_after_verification_code')->name('home');


//**************************end*************************************************


//**************************AuthController*********************************

Route::post('/kilimofy/user/register_form', 'AuthController@create')->name('register');
Route::post('/kilimofy/user/verify_form', 'AuthController@verify')->name('verify_user_phone_number');
Route::post('/kilimofy/user/login', 'AuthController@login')->name('login');
Route::post('/kilimofy/user/logout', 'AuthController@logout')->name('logout');


//**************************end*************************************************

//**************************MkulimaController*********************************
Route::get('/kilimofy/Mkulima/home-page', 'MkulimaController@mkulima_index_page')->middleware('auth');
Route::get('/kilimofy/Mkulima/Mashine-za-kilimo', 'MkulimaController@mashine_za_kilimo')->middleware('auth');
Route::get('/kilimofy/Mkulima/Mashine-za-kilimo/shopping-cart', 'MkulimaController@mashine_za_kilimo_shopping_cart')->middleware('auth');
Route::get('/kilimofy/Mkulima/Bwana-Shamba', 'MkulimaController@mabwana_shamba')->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu', 'MkulimaController@pembejeo_na_viwatilifu')->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/shopping-cart/{bidhaa_info_id}', 'MkulimaController@pembejeo_na_viwatilifu_shopping_cart')->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/Buy-item', 'MkulimaController@pembejeo_na_viwatilifu_buy_item')->middleware('auth');
Route::get('/kilimofy/Usafirisaji/Usafiri', 'MkulimaController@usafiri')->middleware('auth');

//**************************end*************************************************


//**************************MuuzaWaPembejeoController*********************************
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/home-page', 'PembejeoNaViwatilifuController@muuzaji_Wa_pembejeo_na_viwatilifu_index_page')->middleware('auth');
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/{user_id}', 'PembejeoNaViwatilifuController@muuzaji_Wa_pembejeo_na_viwatilifu_account_page')->middleware('auth');
Route::post('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/post-item-page/{user_id}', 'PembejeoNaViwatilifuController@post_item_store_method')->middleware('auth');
//**************************end*************************************************


//****************************MashineZaKilimo***********************************************
Route::get('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page','MashineController@mtoa_huduma_za_mashine_za_kilimo_home_page')->middleware('auth');


//*********************************End******************************************************


//******************************Bwana Shamba************************************************
Route::get('/kilimofy/Bwana-Shamba/home-page', 'BwanaShambaController@Bwana_Shamba_Index_Page');


//******************************Msafirishaji************************************************
Route::get('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/home-page', 'MsafirishajiController@Msafirishaji_Index_Page');


//*****************************End**********************************************************


//**************************AdminController*********************************
Route::get('/kilimofy/Admin', 'AdminController@admin_login_redirect');
Route::get('/kilimofy/Admin/login', 'AdminController@admin_login_redirect');
Route::get('/kilimofy/Admin/register-new-staff', 'AdminController@admin_register_new_staff');
Route::post('/kilimofy/Admin/register-new-staff-store', 'AdminController@admin_register_new_staff_store');
Route::get('/kilimofy/Admin/admin_index_page', 'AdminController@admin_index_page');
Route::get('/kilimofy/Admin/users-list', 'AdminController@users_list');
Route::get('/kilimofy/Admin/users-action-list', 'AdminController@users_action_list');
Route::get('/kilimofy/Admin/New-Forum-Category-Form', 'AdminController@forum_category_form');
Route::post('/kilimofy/Admin/New-Forum-Category-Form-Store', 'AdminController@create_forum_category');


Route::get('/kilimofy/Admin/items-waiting-list', 'AdminController@items_waiting_list');
Route::get('/kilimofy/Admin/items-details/{item_id}', 'AdminController@items_details');
Route::get('/kilimofy/Admin/admin-all-forms', 'AdminController@admin_all_forms');
Route::get('/kilimofy/Admin/items-feedback/{item_id}', 'AdminController@items_feedback_form');
Route::post('/kilimofy/Admin/items-feedback-update', 'AdminController@items_feedback_update');
Route::get('/kilimofy/Admin/accept_item_to_market/{item_id}', 'AdminController@accept_item_to_market');

//**************************end*************************************************

//**************************staffController*************************************************
Route::get('/kilimofy/Staff/login', 'StaffLoginController@showLoginForm');
Route::post('/kilimofy/Admin/login_store', 'AdminController@staff_login');




//**************************end*************************************************


//**************************GroupController*************************************************
Route::get('/kilimofy/Group/Group-Lists', 'GroupController@group_list_page');
Route::post('/kilimofy/Group/Create-Group', 'GroupController@create_group');




//**************************end*************************************************


//**************************ForumController*************************************************
Route::get('/kilimofy/Forum/Forum-Category-List', 'ForumController@forum_categories_page');
Route::get('/kilimofy/Forum/Forum-Category-Topics/{forum_id}', 'ForumController@forum_category_topics_page');
Route::get('/kilimofy/Forum/Forum-Discussion/{discussion_id}', 'ForumController@forum_topics_discussion');
Route::post('/kilimofy/Forum/Forum-Discussion/Join_Discussion', 'ForumController@join_discussion');
Route::post('/kilimofy/Forum/Create-Discussion', 'ForumController@create_discussion');
//**************************end*************************************************



//**************************ChatController*************************************************
// Route::post('/kilimofy/test-message', 'ChatController@chat_widget_message_text');

//**************************end*************************************************


//**************************UserAccountController*********************************
Route::get('/kilimofy/UserAccount/about_user_page', 'UserAccountController@about_user_page');
Route::get('/kilimofy/UserAccount/user_timeline_page', 'UserAccountController@user_timeline_page');
Route::get('/kilimofy/UserAccount/user_friends_page', 'UserAccountController@user_friends_page');
Route::get('/kilimofy/UserAccount/user_groups_page', 'UserAccountController@user_groups_page');
Route::get('/kilimofy/UserAccount/user_photos_page', 'UserAccountController@user_photos_page');
Route::get('/kilimofy/UserAccount/user_videos_page', 'UserAccountController@user_videos_page');
Route::get('/kilimofy/UserAccount/user_blog_page', 'UserAccountController@user_blog_page');
Route::get('/kilimofy/UserAccount/user_forum_page', 'UserAccountController@user_forum_page');
Route::get('/kilimofy/UserAccount/user_store_page', 'UserAccountController@user_store_page');
Route::get('/kilimofy/UserAccount/user_setting_page', 'UserAccountController@user_videos_page');

//**************************end*************************************************


//**************************PostController*********************************
Route::post('/kilimofy/User/status-post', 'PostController@create_status');
Route::post('/kilimofy/Blog/poll_option', 'PostController@poll_option')->middleware('auth');
Route::post('/kilimofy/Blog/user_quick_post', 'PostController@user_quick_post');
Route::get('/kilimofy/Post/read_comments/{post_id}', 'PostController@read_comments');
Route::post('/kilimofy/Blog/send_comments', 'PostController@send_comments');
Route::get('/kilimofy/Blog/reply_comment/{comment_id}', 'PostController@reply_comment');
Route::post('/kilimofy/Blog/reply_comment_form', 'PostController@reply_comment_create');
Route::post('/kilimofy/Admin/admin-all-forms-post', 'PostController@create');


//**************************end*************************************************


//**************************SettingsController*************************************************
Route::get('/kilimofy/UserAccount-General-Settings/{user_id}', 'SettingsController@General_Settings');
Route::get('/kilimofy/UserAccount-Profile-Settings/{user_id}', 'SettingsController@My_Profile');
Route::get('/kilimofy/UserAccount-Social-Account-Settings/{user_id}', 'SettingsController@Social_Account');

//**************************end*************************************************
