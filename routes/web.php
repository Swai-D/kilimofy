<?php



//**************************HomeBladeController*********************************
Route::get('/', 'HomeBladeController@welcome');
Route::get('/kilimofy/home/verify', 'HomeBladeController@verify')->name('verify');
Route::post('kilimofy/Change-Account/{user_id}', 'HomeBladeController@switch_account');
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
Route::get('/kilimofy/Mkulima/Bwana-Shamba', 'MkulimaController@mabwana_shamba')->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu', 'MkulimaController@pembejeo_na_viwatilifu')->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/Shopping-cart', 'MkulimaController@pembejeo_na_viwatilifu_shopping_cart')->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/Buy-item', 'MkulimaController@pembejeo_na_viwatilifu_buy_item')->middleware('auth');

//**************************end*************************************************

//**************************MuuzaWaPembejeoController*********************************
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/home-page', 'PembejeoNaViwatilifuController@muuzaji_Wa_pembejeo_na_viwatilifu_index_page')->middleware('auth');
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page', 'PembejeoNaViwatilifuController@muuzaji_Wa_pembejeo_na_viwatilifu_account_page')->middleware('auth');
Route::post('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/post-item-page/{user_id}', 'PembejeoNaViwatilifuController@post_item_store_method')->middleware('auth');
//**************************end*************************************************


//****************************MashineZaKilimo***********************************************
Route::get('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page','MashineController@mtoa_huduma_za_mashine_za_kilimo_home_page')->middleware('auth');


//*********************************End******************************************************


//******************************Bwana Shamba************************************************
Route::get('/kilimofy/Bwana-Shamba/home-page', 'BwanaShambaController@Bwana_Shamba_Index_Page');


//*****************************End**********************************************************

























//**************************MagonjwaNaWaDuduController*********************************
Route::get('/kilimofy/Mtaalamu_Wa_Wadudu_Na_Magojwa_ya_Mazao/home-page', 'MagonjwaNaWaDuduController@mtaalamu_Wa_Wadudu_Na_Magojwa_ya_Mazao_index_page');

//**************************end*************************************************





//**************************UserAccountController*********************************
Route::get('/kilimofy/UserAccount/about_user_page', 'UserAccountController@about_user_page');
Route::get('/kilimofy/UserAccount/user_timeline_page', 'UserAccountController@user_timeline_page');
Route::get('/kilimofy/UserAccount/user_friends_page', 'UserAccountController@user_friends_page');
Route::get('/kilimofy/UserAccount/user_groups_page', 'UserAccountController@user_groups_page');
Route::get('/kilimofy/UserAccount/user_photos_page', 'UserAccountController@user_photos_page');
Route::get('/kilimofy/UserAccount/user_videos_page', 'UserAccountController@user_videos_page');
Route::get('/kilimofy/UserAccount/user_setting_page', 'UserAccountController@user_videos_page');

//**************************end*************************************************


//**************************PostController*********************************
Route::get('/kilimofy/Blog/blog-post-index', 'PostController@blog_post_index');
Route::post('/kilimofy/Blog/poll_option', 'PostController@poll_option');
Route::post('/kilimofy/Blog/user_quick_post', 'PostController@user_quick_post');
Route::get('/kilimofy/Post/read_comments/{post_id}', 'PostController@read_comments');
Route::post('/kilimofy/Blog/send_comments', 'PostController@send_comments');
Route::get('/kilimofy/Blog/reply_comment/{comment_id}', 'PostController@reply_comment');
Route::post('/kilimofy/Blog/reply_comment_form', 'PostController@reply_comment_create');
Route::post('/kilimofy/Admin/admin-all-forms-post', 'PostController@create');


//**************************end*************************************************



//**************************MarketPlaceController*********************************
Route::get('/kilimofy/MarketPlace/market-place-index', 'MarketPlaceController@index');
Route::get('/kilimofy/MarketPlace/{item_id}', 'MarketPlaceController@items_details');

//**************************end*************************************************




//**************************AdminController*********************************
Route::get('/kilimofy/Admin/admin_index_page', 'AdminController@admin_index_page');
Route::get('/kilimofy/Admin/users-profiles', 'AdminController@users_profiles');
Route::get('/kilimofy/Admin/items-waiting-list', 'AdminController@items_waiting_list');
Route::get('/kilimofy/Admin/items-details/{item_id}', 'AdminController@items_details');
Route::get('/kilimofy/Admin/admin-all-forms', 'AdminController@admin_all_forms');
Route::get('/kilimofy/Admin/items-feedback/{item_id}', 'AdminController@items_feedback_form');
Route::post('/kilimofy/Admin/items-feedback-update', 'AdminController@items_feedback_update');
Route::get('/kilimofy/Admin/accept_item_to_market/{item_id}', 'AdminController@accept_item_to_market');

//**************************end*************************************************




//**************************MarketPlaceController*********************************
Route::get('/kilimofy/Items/items-index', 'ItemController@index');

//**************************end*************************************************




//**************************ItemController*********************************
Route::post('/kilimofy/Item/add-item', 'ItemController@create');

//**************************end*************************************************




//**************************AgroInputsController*********************************
Route::get('/kilimofy/AgroInputs/agroinputs-index', 'AgroInputsController@index');

//*******************************************************************************




Route::get('/kilimofy/test', function(){
  return view('UserAccountBladeFiles.BwanaShamba.bwana-shamba-home-page');
});
