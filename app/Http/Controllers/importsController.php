<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\imports;
use App\User;
use App\product;
use App\category;
use App\tempo;

class importsController extends Controller
{
        public function index()
    {


    $imp = imports::all();
    return view('admin.imports.index', compact('imp'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
         $detail = tempo::all();
         if($detail->isEmpty())
        {
           return redirect()->back();
        }
         return view('admin.imports.create');
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
           'drivername'=>'required|string|max:255',
           'carnumber' => 'required',
           'intime' => 'required',
           'outime'=>'required',
           'farmname'=>'required|string|max:255',
         ]);

         $input = $request->all();
         $details = tempo::where('type', 'import')->get();

         $user = User::where('name', $input['name'])->get()->first();
         $userId = $user->id;
         $token = $input['_token'];
         $farmer = $input['farmname'];

          unset($input['name']);
          unset($input['_token']);
          unset($input['farmname']);


          foreach ($details  as  $d) {

         $all  = array('_token' =>$token, 'user_id'=>$userId, 'farmname'=>$farmer ,'product_id' =>$d->product_id ,'category_id' => $d->category_id , 'quantity' => $d->quantity)+$input;
          imports::create($all);

          }

          foreach($details as $dl)
         {
             $dl->delete();
         }
         return redirect('uwadminimport')->with('success', 'Imports Added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
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
         	$imp = imports::findorFail($id);
         return view('admin.imports.edit', compact('imp','product' , 'category'));
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
            $imp = imports::findorfail($id);
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

          $imp->update($output);
         return redirect('uwadminimport')->with('success', 'Imports Added Succesfully');
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
