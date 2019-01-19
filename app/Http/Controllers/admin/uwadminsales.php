<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\model\admin\sales;
use App\model\admin\purchases;
use App\model\admin\product;
use App\model\admin\category;
use App\model\admin\User;
use App\model\admin\Tempo;
use App\Http\Controllers\Controller;
use App\model\admin\Size;


class uwadminsales extends Controller
{
      public function index()
    { 


    $sale = sales::with('category','product','user','size')->orderBy('id','desc')->get();;
    return view('admin.sales.index', compact('sale'));
         
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {   

         $detail = Tempo::all();
         if($detail->isEmpty())
        {
           return redirect()->back();
        }
         return view('admin.sales.create');
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
           'date' => 'required|date',
           'sold_to'=> 'required|string|max:255|different:name',
         ]);

         $input = $request->all();
         $details = Tempo::where('type', 'sales')->get();

         if(strcasecmp($input['name'], $input['sold_to']) == 0){

             return redirect()->back()->with('error','Buyer should be different To the seller'); 
         }
         
         $user = User::where('name', $input['name'])->get()->first();

         $userId = $user->id;
         $token = $input['_token'];

          unset($input['name']);
          unset($input['_token']);
         
       foreach ($details  as  $d) {

         $all  = array('_token' =>$token, 'user_id'=>$userId,'product_id' =>$d->product_id ,'category_id' => $d->category_id , 'size_id' => $d->size_id , 'quantity' => $d->quantity , 'price' => $d->price)+$input;
          $created =  sales::create($all);

          }

         if($created)
     {
          foreach($details as $dl)
         {
             $dl->delete();
         }
      }
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
         $product = product::orderBy('id','asc')->get();
         $category = category::orderBy('id','desc')->get();
         $size = Size::orderBy('id','desc')->get();
          $sale = sales::findorFail($id);
          $sale['price']= $sale->price/$sale->quantity;
         return view('admin.sales.edit', compact('size','sale','product' , 'category'));
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
           'sold_to'=> 'required|string|max:255|different:name',
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


         $cats = category::where('id', $catsid )->get()->first();
         $userId = $user->id;
         $token = $input['_token'];
       
          unset($input['name']);
          unset($input['_token']);
          $output = array('_token' =>$token , 'user_id'=>$userId)+$input;
  
         $sales->update($output);
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
