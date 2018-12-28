<?php

namespace App\Http\Controllers;

use App\block;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $block = block::all();
        return view('admin.Blocks.index', compact('block'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Blocks.create');
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
            'name' => 'required|string|max:255',
           'BlockOwner' => 'nullable|string|max:255|exists:users,name',
           'Area' => 'required|numeric|gte:1', 
           'blockFee' => 'required|numeric|gte:1',
         ],
                 [ 'Area.gte' => 'The :attribute field can not be Less than 1.' , 
                    'blockFee.gte' => 'The :attribute field can not be Less than 1.'

                 ]
       );

          $input = $request->all();
          if($input['BlockOwner']){
          $user = User::where('name', $input['BlockOwner'])->get()->first();
          $token = $input['_token'];
          unset($input['BlockOwner']);

         $block = block::create($input);

         $user->blocks()->save($block);
       }
       else{
        
         $block = block::create($input);
       }

          return redirect('uwablock')->with('success','Block Added Succesfull');
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
        $block = block::findorfail($id);

        return view('admin.Blocks.edit', compact('block'));
        
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

         $blck = block::findorfail($id);
         $this->validate($request, [
            'name' => 'required|string|max:255',
           'Area' => 'required|numeric|gte:1', 
           'blockFee' => 'required|numeric|gte:1',
         ], 
          [ 'Area.gte' => 'The :attribute field can not be Less than 1.' , 
            'blockFee.gte' => 'The :attribute field can not be Less than 1.'
           ]

       );

          $input = $request->all();
          $user = User::where('name', $input['BlockOwner'])->get()->first();
          $userId = $user->id;
          $blck->update($input);
          return redirect('uwablock')->with('success','Block Edited Succesfull');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $blck= block::findorfail($id);
          $blck->delete();
          return redirect('uwablock')->with('success', 'Block Deleted Succesfully'); 
    }
}
