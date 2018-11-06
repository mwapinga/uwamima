<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imports;
use App\User;
use App\product;
use App\category;

class importsController extends Controller
{
        public function index()
    { 


    $imp = imports::all();
    return view('admin.imports.index', compact('imp'));
         
    }
        
       
        public function result(Request  $request)
    {
       
        $result=category::where('name', 'LIKE', "%{$request->input('query')}%")->get();
        return response()->json($result);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {   
         // $product = product::pluck('name','id');
         // $category = category::pluck('name','id');
         return view('admin.imports.create' , compact('user' , 'product' , 'category'));
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
           'product' => 'required|string|max:255|exists:products,name',
           'category' => 'required|string|max:255|exists:categories,name',
           'quantity' => 'required',
           'date' => 'required|date',
           'drivername'=>'required|string|max:255',
           'carnumber' => 'required',
           'intime' => 'required',
           'outime'=>'required',
         ]);

          $input = $request->all();
         
         $user = User::where('name', $input['name'])->get()->first();
         $prods = product::where('name', $input['product'])->get()->first();
         $cats = category::where('name', $input['category'])->get()->first();


         $userId = $user->id;
         $prodId = $prods->id;
         $catId = $cats->id;
         $token = $input['_token'];
         
           unset($input['name']);
            unset($input['product']);
            unset($input['category']);
            unset($input['_token']);

         $output1 = array('user_id' =>$userId , 'product_id'=>$prodId, 'category_id'=>$catId)+$input;
         $output2 = array('_token' =>$token)+$output1;

         imports::create($output2);
         return redirect('uwadminimport')->with('success', 'Imports Added Succesfully');

       
        
        
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

    	$imp = imports::findorFail($id);
         return view('admin.imports.edit', compact('imp'));
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

         $impo= imports::findorfail($id);
        $this->validate($request, [
           'name' => 'required|string|max:255|exists:users,name',
           'product' => 'required|string|max:255|exists:products,name',
           'category' => 'required|string|max:255|exists:categories,name',
           'quantity' => 'required',
           'date' => 'required|date',
           'drivername'=>'required|string|max:255',
           'carnumber' => 'required',
           'intime' => 'required',
           'outime'=>'required',
         ]);

          $input = $request->all();
         
         $user = User::where('name', $input['name'])->get()->first();
         $prods = product::where('name', $input['product'])->get()->first();
         $cats = category::where('name', $input['category'])->get()->first();


         $userId = $user->id;
         $prodId = $prods->id;
         $catId = $cats->id;
         $token = $input['_token'];
         
           unset($input['name']);
            unset($input['product']);
            unset($input['category']);
            unset($input['_token']);

         $output1 = array('user_id' =>$userId , 'product_id'=>$prodId, 'category_id'=>$catId)+$input;
         $output2 = array('_token' =>$token)+$output1;

           imports::update($output2);
           return redirect('uwadminimport')->with('success', 'Imports Edited Succesfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $impo= imports::findorfail($id);   
          $impo->delete();
          return redirect('uwadminimport')->with('success', 'Imports Deleted Succesfully');
    }
    
}
