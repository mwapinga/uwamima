<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\model\admin\imports;
use App\model\admin\exports;
use App\model\admin\sales;
use App\model\admin\order;
use App\model\admin\block;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class subhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sub.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
   public function profile(){
    
    return view('sub.user.show');

   } 

   public function profedit(){
    return view('sub.user.edit');
   } 

     public function photoupload(){

          $this->validate($request, [
           'photo_id' => 'required',
         ]);

         $id = Auth::User()->id;
         $user = User::findorfail($id);
         $input = $request->all();
     
        if($file = $request->file('photo_id'))
        {       
             $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
             $file->move('assets/images/', $name);
             $thumbnailpath = public_path('assets/images/'.$name);  
             $img = Image::make($thumbnailpath)->resize(60,60)->save($thumbnailpath);   
             $photo = Photo::create(['photo_tag'=> $name]);
             $input['photo_id']=$photo->id;
        }

         $user->update($input);
        return redirect('profile')->with('success', 'Photo Succesfully Uploaded'); 
     }
    public function import(){

        $id = Auth::user()->id;
        $impo = imports::where('user_id',$id)->get();
        return view('sub.imports.index',compact('impo'));
    }

      public function export(){

        $id = Auth::user()->id;
        $expo = exports::where('user_id',$id)->get();
        return view('sub.exports.index',compact('expo'));
    }

        public function sales(){
        $id = Auth::user()->id;
        $sale = sales::where('user_id',$id)->get();
        return view('sub.sales.index',compact('sale'));
    }

   public function block(){

        return view('sub.blocks.index');
    }

       public function order(){
        // $id = Auth::user()->id;
        // $order = order::where('user_id',$id)->get();
        return view('sub.orders.index');
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
        $user= User::findorfail($id);
              $this->Validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'nullable|string',Rule::unique('users')->ignore($user->id),
            'gender' => 'required|boolean',
            'borndate'  => 'required|date',
            'adress' => 'required|string|max:255',
            'phone' => 'required|numeric|digits:10',
        ]);

             $input = $request->all();  

             $user->update($input);
             return redirect('profile')->with('success', 'User Edited Succesfully');  
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
