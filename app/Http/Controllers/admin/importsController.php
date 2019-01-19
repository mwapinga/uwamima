<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\model\admin\imports;
use App\model\admin\User;
use App\model\admin\product;
use App\model\admin\category;
use App\model\admin\Tempo;
use App\model\admin\Size;
use App\model\admin\Instore;

use App\Http\Controllers\Controller;

class importsController extends Controller
{
        public function index()
    {


    $imp = imports::with('category','product','user','size')->orderBy('id','desc')->get();
    return view('admin.imports.index', compact('imp'));

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
         $details = Tempo::where('type', 'import')->get();

         $user = User::where('name', $input['name'])->get()->first();
         $userId = $user->id;
         $token = $input['_token'];
         $farmer = $input['farmname'];

          unset($input['name']);
          unset($input['_token']);
          unset($input['farmname']);


          foreach ($details  as  $d) {

         $all  = array('_token' =>$token, 'user_id'=>$userId, 'farmname'=>$farmer ,'product_id' =>$d->product_id ,'category_id' => $d->category_id , 'size_id'=> $d->size_id,'quantity' => $d->quantity)+$input;
           $created = imports::create($all);

  $instore = array('product_id' => $d->product_id ,'category_id' => $d->category_id , 'size_id'=> $d->size_id,'quantity' => $d->quantity, 'type'=>'import', 'trans_id'=> $created->id);
         Instore::create($instore);

          }

     if($created)
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
         $product = product::orderBy('id','asc')->get();
         $category = category::orderBy('id','desc')->get();
         $size = Size::orderBy('id','desc')->get();
         	$imp = imports::findorFail($id);
         return view('admin.imports.edit', compact('size','imp','product' , 'category'));
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
            $instore = Instore::where('type','import')->where('trans_id',$id)->get()->first();
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
     
          unset($input['name']);
          unset($input['_token']);
          $output = array('_token' =>$token , 'user_id'=>$userId)+$input;
          $store = array('product_id' => $input['product_id'] ,'category_id' => $input['category_id'] , 'size_id'=> $input['size_id'],'quantity' => $input['quantity'] );
           if($instore){
            $instore->update($store);
          }
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
          $instore = Instore::where('type','import')->where('trans_id',$id)->get()->first();
          $impo->delete();
           if($instore){
            $instore->delete();
          }
          return redirect('uwadminimport')->with('success', 'Imports Deleted Succesfully');
    }

}
