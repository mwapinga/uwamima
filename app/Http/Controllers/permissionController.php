<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\User;
use App\Regkey;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class permissionController extends Controller
{
       public function index()
    { 

          $user= User::all();
          return view('admin.permit.index',compact('user') );
     
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {      $confirmation_code = null;
           $succes = null;
           return view('admin.permit.Hashkey',compact('confirmation_code','succes'));
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
          'email' => 'required|string|email|max:255|unique:regkeys',
         ]);
           
         $input = $request->all();
         $confirmation_code = str_random(40);

        $emailcheck =Regkey::where('email', $input['email'])->get()->first(); 

        if($emailcheck){   
                    $emailcheck->delete(); 
                    Regkey::create([
                            'key'=> $confirmation_code,
                            'email'=>$input['email'], ]); 
                    
                     $success = "New User Regristration Access Granted Use the Key Below";
                     return view('admin.permit.Hashkey',compact('confirmation_code','success'));
                      }

                        Regkey::create([
                            'key'=> $confirmation_code,
                            'email'=>$input['email'], ]); 
                    
                    $success = "New User Regristration Access Granted Use the Key Below";   
                     return view('admin.permit.Hashkey',compact('confirmation_code','success'));
                        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
         $users = User::findorfail($id);
         return view('admin.permit.delete',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
         $role = role::all();
    	 $user = User::findorFail($id);
         return view('admin.permit.edit', compact('user','role'));
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
    	
  
         $users = User::findorFail($id);
         $input = $request->all();
          $this->validate($request, [
           'role_id' => 'required|integer',
           'status' => 'required',
           'password' => 'required',
         ]);
         $password = $input['password'];
         $email = Auth::User()->email; 
           
         
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
        	unset($input['password']);
            $users->update($input);

            return redirect('permission')->with('success', 'Permission Changed Succesfully');
        }

        return redirect('permission/' . $users->id . '/edit')->with('success', 'You Entered wrong Password');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {      $this->validate($request, [
           'password' => 'required',
         ]);
     $user = User::findorfail($id);
     $input = $request->all();
     $password = $input['password'];
     $email = Auth::user()->email;
     $ide = Auth::user()->id;
     
  if($ide != $id){
     if(Auth::attempt(['email' => $email, 'password' => $password])) {
                unlink(public_path(). "assets/images/". $user->photo->photo_tag );
                $user->delete();
                return redirect('permission')->with('success', 'User Deleted Succesfully');       
            } 
      else {
           return redirect('permission/'.$user->id)->with('success', 'You entered the wrong password'); 
           }
       }
     else {
         return redirect('permission/'.$user->id)->with('success', 'Ooops Can Not Delete Yourself'); 
     }
 }

}
