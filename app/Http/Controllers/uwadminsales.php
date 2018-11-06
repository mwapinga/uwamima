<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uwadminsales extends Controller
{
       public function index()
    { 


    $imp = imports::all();
    return view('admin.sales.index', compact('imp'));
         
    }
        
        public function resultimpo(Request  $request)
    {
        $result=\App\category::where('name', 'LIKE', "%{$request->input('query')}%")->get();
        $result1=\App\product::where('name', 'LIKE', "%{$request->input('query')}%")->get();
        $result2=\App\User::where('name', 'LIKE', "%{$request->input('query')}%")->get();
        $result0=\App\User::where('username', 'LIKE', "%{$request->input('query')}%")->get();
        $newarray = array($result,$result1, $result2,$result0);
        return response()->json($newarray);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {   
         $product = product::pluck('name','id');
         $category = category::pluck('name','id');
         return view('admin.sales.create' , compact('user' , 'product' , 'category'));
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
         
         $user = User::where('name', $request['name'])->get()->first();
         $prods = product::where('name', $request['product'])->get()->first();
         $cats = category::where('name', $request['category'])->get()->first();

         $input['user_id'] = $user->id;
         $input['product_id'] = $prods->id;
         $input['category_id'] = $cats->id;

          imports::create([
            'user_id' => $input['user_id'],
            'product_id' => $input['product_id'],
            'category_id' => $input['category_id'],
            'carnumber' => $input['carnumber'],
            'drivername' => $input['drivername'],
            'quantity' => $input['quantity'],
            'date' => $input['date'],
            'intime' => $input['intime'],
            'outime' => $input['outime'],
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

    	$imp = sales::findorFail($id);
         return view('admin.sales.edit', compact('imp'));
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

         $impo= sales::findorfail($id);
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
         
         $user = User::where('name', $request['name'])->get()->first();
         $prods = product::where('name', $request['product'])->get()->first();
         $cats = category::where('name', $request['category'])->get()->first();

         $input['user_id'] = $user->id;
         $input['product_id'] = $prods->id;
         $input['category_id'] = $cats->id;

          imports::update([
            'user_id' => $input['user_id'],
            'product_id' => $input['product_id'],
            'category_id' => $input['category_id'],
            'carnumber' => $input['carnumber'],
            'drivername' => $input['drivername'],
            'quantity' => $input['quantity'],
            'date' => $input['date'],
            'intime' => $input['intime'],
            'outime' => $input['outime'],
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
          $impo= sales::findorfail($id);   
          $impo->delete();
          return redirect('uwadminsale')->with('success', 'Sales Deleted Succesfully');
    }
    
}
