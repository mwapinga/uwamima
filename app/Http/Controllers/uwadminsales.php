<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sales;
use App\purchases;
use App\product;
use App\category;
use App\User;

class uwadminsales extends Controller
{
      public function index()
    { 


    $sale = sales::all();
    return view('admin.sales.index', compact('sale'));
         
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {   
         $product = product::all();
         $category = category::all();
         return view('admin.sales.create' , compact('product' , 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
           'name' => 'required|string|max:255|exists:users,name',
           'product_id' => 'required',
           'category_id' => 'required',
           'quantity' => 'required',
           'date' => 'required|date',
           'price' => 'required',
           'sold_to'=> 'required|string|max:255|exists:users,name|different:name',
         ]);

         $input = $request->all();
         $input['price'] = $input['quantity'] * $input['price'];

         if(strcasecmp($input['name'], $input['sold_to']) == 0){

             return redirect()->back()->with('error','Buyer should be different To the seller'); 
         }
 
         $catsid = $input['category_id']; 
         $prodsid = $input['product_id']; 
         
         $user = User::where('name', $input['name'])->get()->first();
         $buyer = User::where('name', $input['sold_to'])->get()->first();
         $buyerID = $buyer->id;

         $cats = category::where('id', $catsid )->get()->first();
         $userId = $user->id;
         $token = $input['_token'];
         $catproId = $cats->product_id;

         if($prodsid != $catproId){     
          return redirect()->back()->with('success','Invalid Category for Selected Product'); 
         }
          unset($input['name']);
          unset($input['_token']);
          $output = array('_token' =>$token , 'user_id'=>$userId)+$input;
  
         $salez = sales::create($output);
         purchases::create([
             'user_id'=>$buyerID, 
             'sales_id'=>$salez->id,
          ]);
        return redirect('uwadminsale')->with('success', 'Sales Added Succesfully');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
          $product = product::all();
          $category = category::all();
          $sale = sales::findorFail($id);
         return view('admin.sales.edit', compact('sale','product' , 'category'));
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
            $sales = sales::findorfail($id);
     
    $this->validate($request, [
           'name' => 'required|string|max:255|exists:users,name',
           'product_id' => 'required',
           'category_id' => 'required',
           'quantity' => 'required',
           'date' => 'required|date',
           'price' => 'required',
           'sold_to'=> 'required|string|max:255|exists:users,name|different:name',
         ]);

         $input = $request->all();
         
           $input['price'] = $input['quantity'] * $input['price'];

         if(strcasecmp($input['name'], $input['sold_to']) == 0){

             return redirect()->back()->with('error','Buyer should be different To the seller'); 
         }

         $catsid = $input['category_id']; 
         $prodsid = $input['product_id']; 

         $user = User::where('name', $input['name'])->get()->first();
         $buyer = User::where('name', $input['sold_to'])->get()->first();
         $buyerID = $buyer->id;

         $cats = category::where('id', $catsid )->get()->first();
         $userId = $user->id;
         $token = $input['_token'];
         $catproId = $cats->product_id;

         if($prodsid != $catproId){     
          return redirect()->back()->with('success','Invalid Category for Selected Product'); 
         }
          unset($input['name']);
          unset($input['_token']);
          $output = array('_token' =>$token , 'user_id'=>$userId)+$input;
  
         $sales->update($output);
          $purchases = purchases::where('sales_id', $id)->get()->first();
         $purchases->update([
             'user_id'=>$buyerID,
          ]);
        return redirect('uwadminsale')->with('success', 'Sales Edited Succesfully');      
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $sale= sales::findorfail($id);   
          $sale->delete();
          return redirect('uwadminsale')->with('success', 'Sales Deleted Succesfully');
    }
    
}
