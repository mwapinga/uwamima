<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imports;
use App\exports;
use App\sales;
use App\order;
use App\BlockPayout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use App\block;

class BlockOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
       
         // $user = DB::table("role_user")->where('role_id', 3);
         $roleName = 'Subscriber';
         $user = User::whereHas('roles', function($query) use ($roleName) {
                                $query->where('name', '=', $roleName);
         })->get();
         return view('admin.BlocksOwner.index' , compact('user')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     

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
            'name' => 'nullable|string|max:255|exists:users,name',
         ]);
         $input = $request->all();
         $blckId = $input['blockId'];
         $name = $input['name'];
         $user = User::where('name',$name)->get()->first();
         $blck = block::findorfail($blckId);
         $roleName = $blck->name;
         $userz = User::whereHas('blocks', function($query) use ($roleName) {
                                $query->where('name', '=', $roleName);
         })->get();

         foreach ($userz as $index => $users) {
             
             if($users->id == $user->id){
                return redirect()->back()->with('fail' , 'Oooops! User arleady belong to this Block Check Available User carefully');;
             }
         }
         
         $user->blocks()->save($blck); 
    
        return redirect()->back()->with('success' , 'User Added successfully');;
         

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
        $blck = block::findorfail($id);
        return view('admin.BlocksOwner.edit',compact('blck'));
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
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
       $input = $request->all();
        
        $user = User::findorfail($id);
        $blockId = $input['blockId'];
        $user->blocks()->detach($blockId);
          return redirect()->back()->with('success' , 'User removed successfully');



    }
}
