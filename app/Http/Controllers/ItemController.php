<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Image;
use Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Item::where('seller_id', Auth::user()->id)->get();
      return view('ItemBladeFiles.user-sells-items-index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //validating the request
      // dd(request()->item_name);
      $data = request()-> validate([
        'item_name' => ['required','string','max:255'],
        'item_category' => ['required','string','max:255'],
        'item_location' => ['required','string','max:255'],
        'item_price' => ['required','string','max:255'],
        'item_trasport_cost' => ['required','string','max:255'],
        'item_description' => ['required','string','max:255'],
        'seller_id' => ['required','string','max:255'],
        'item_image' => 'file|max:5000',
      ]);

      //dd($data);
       //assigning request to the item model
       $item = new Item();
       $item->item_name = request()->item_name;
       $item->item_category = request()->item_category;
       $item->item_location = request()->item_location;
       $item->item_description = request()->item_description;
       $item->item_price = request()->item_price;
       $item->seller_id = request()->seller_id;
       $item->item_trasport_cost = request()->item_trasport_cost;



      //save item image to /Uploads/ItemsImages/
      if(request()->hasFile('item_image')){

            $post_image = request()->file('item_image');
            $filename = time().','.$post_image->getClientOriginalExtension();
            Image::make($post_image)->resize(300, 300)->save(public_path('/Uploads/ItemsImages/'.$filename));
            $item->item_image = $filename;
          }
      $item->save();



      return redirect()->back();
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
