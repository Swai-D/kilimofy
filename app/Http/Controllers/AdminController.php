<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Item;

class AdminController extends Controller
{
    //Admin Index Page
    Public function admin_index_page()
    {
      return view('AdminBladeFiles.admin-index');
    }

    //Users list
    Public function users_profiles()
    {
      $users = User::all();
      return view('AdminBladeFiles.users-profiles', compact('users'));
    }

    Public function items_waiting_list()
    {
      $items = Item::all();
      return view('AdminBladeFiles.item-waiting-list', compact('items'));
    }


    Public function items_details(Item $item_id)
    {

      $item_details = Item::where('id', '=', $item_id->id)->get();

      return view('AdminBladeFiles.item-details', compact('item_details'));
    }


    Public function admin_all_forms()
    {

      return view('AdminBladeFiles.admin-all-forms');
    }

    Public function items_feedback_form(Item $item_id)
    {
      $feedback_id = $item_id->id;
      // dd($id);
      return view('AdminBladeFiles.item-feedback', compact('feedback_id'));
    }

    Public function items_feedback_update(Request $request)
    {

      Item::where('id', '=', $request->feedback_id)->update(['feedback' => $request->feedback]);
      $items = Item::all();
      return redirect('/kilimofy/Admin/items-waiting-list');
    }

    Public function accept_item_to_market(Item $item_id)
    {


      Item::where('id', '=', $item_id->id)->update(['status' => 'Accepted'], ['feedback' => null]);

      return redirect('/kilimofy/Admin/items-waiting-list');
    }
}
