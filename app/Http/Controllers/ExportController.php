<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\exports;
use App\User;
use App\product;
use App\category;

class ExportController extends Controller
{
        public function index()
    { 


    $exp = exports::all();
    return view('admin.exports.index', compact('exp'));
         
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
         return view('admin.exports.create' , compact('product' , 'category'));
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
           'drivername'=>'required|string|max:255',
           'carnumber' => 'required',
           'intime' => 'required',
           'outime'=>'required',
         ]);

         $input = $request->all();
         $catsid = $input['category_id']; 
         $prodsid = $input['product_id']; 

         $user = User::where('name', $input['name'])->get()->first();
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
  
          exports::create($output);
         return redirect('uwadminexport')->with('success', 'Exports Added Succesfully');       
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
         $exp = exports::findorFail($id);
         return view('admin.exports.edit', compact('exp','product','category'));
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
             $exp = exports::findorfail($id);

          $this->validate($request, [
           'name' => 'required|string|max:255|exists:users,name',
           'product_id' => 'required',
           'category_id' => 'required',
           'quantity' => 'required',
           'date' => 'required|date',
           'drivername'=>'required|string|max:255',
           'carnumber' => 'required',
           'intime' => 'required',
           'outime'=>'required',
         ]);

         $input = $request->all();
         $catsid = $input['category_id']; 
         $prodsid = $input['product_id']; 

         $user = User::where('name', $input['name'])->get()->first();
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
  
          $exp->update($output);
         return redirect('uwadminexport')->with('success', 'Exports Edited Succesfully'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $impo= exports::findorfail($id);   
          $impo->delete();
          return redirect('uwadminexport')->with('success', 'Export Deleted Succesfully');
    }
    
}
