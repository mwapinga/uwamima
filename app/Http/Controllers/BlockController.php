<?php

namespace App\Http\Controllers;

use App\block;
use App\User;

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
           'BlockOwner' => 'required|string|max:255|exists:users,name',
           'Area' => 'required|numeric',  
         ]);

          $input = $request->all();
          $user = User::where('name', $input['BlockOwner'])->get()->first();
          $userId = $user->id;
          $token = $input['_token'];
           unset($input['BlockOwner']);
           unset($input['_token']);

         $all  = array('_token' =>$token, 'user_id'=>$userId, )+$input;

            $blck = block::create($all);

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
