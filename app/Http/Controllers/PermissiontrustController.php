<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\User;
use App\TempoCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Mail;
use \Crypt;

class  PermissiontrustController extends Controller
{
       public function index()
    { 

         $user = User::all();
        return view('admin.permit.index',compact('user') );
     
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {      $confirmation_code = null;
           $success = null;
           return view('admin.permit.Hashkey',compact('confirmation_code','success'));
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
          'email' => 'required|string|email|max:255|unique:users',
         ]);
           
         $input = $request->all();
         $code =  str_random(8);
         $mail = $input['email'];

         TempoCode::create([
               'email' => $mail,
               'code' => Crypt::encrypt($code)       
            ]);

         $data = [
                 'title' => 'Keep Safe this Information',
                 'Mail'=> 'User email::  ' . ' ' .  $mail ,
                 'Password'=> 'Code:: ' . ' ' . $code, 
                 'Massage' => 'Please Go to uwamima.or.tz/login And Enter Create account and use the code above to create account'
                ];
                
         Mail::send('mail.signup' , $data , function($massage) use ($mail){

             $massage->to($mail)->subject('UWAMIMA LOGIN CREDENTIALS ');

         });
         $success = "User Added Succesfully And the Email Of credentials Has been sent to user's email";
         return view('admin.permit.Hashkey',compact('success','mail'));
                            
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
         $user = User::findorFail($id);
         $role = role::whereNotIn('id', [4])->get();
    	
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

        
         $input = $request->all();
          $this->validate($request, [
           'role_id' => 'required|integer',
           'status' => 'required',
           'password' => 'required',
         ]);

         $users = User::findorFail($id);
         $password = $input['password'];
         $email = Auth::User()->email;
         $id = $input['role_id']; 
         $role = Role::findorfail($id);
           
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

        	unset($input['password']);
            $users->update([
                'status' => $input['status']
            ]);

           $ans = $users->hasRole($role->name);
            if($ans)
            {
              return redirect('permission')->with('fail', 'Oooops! User arleady has  this Role Check Available Role for User carefully');
            }
        else {
         $users->attachRole($role);
         return redirect('permission')->with('success', 'Permission Changed Succesfully');
           }

            
        }

        return redirect('permission/' . $users->id . '/edit')->with('success', 'You Entered wrong Password');
    }

        public function detach(Request $request, $id)
    {

        
         $input = $request->all();
          $this->validate($request, [
           'role_id' => 'required|integer',
           'password' => 'required',
         ]);

         $users = User::findorFail($id);
         $password = $input['password'];
         $email = Auth::User()->email;
         $id = $input['role_id']; 
         $role = Role::findorfail($id);
           
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

           $ans = $users->hasRole($role->name);
            if(!$ans)
            {
              return redirect('permission')->with('fail', 'The Role is not belong to the User Can not be removed');
            }
            
        else {
              $users->detachRole($role);
             return redirect('permission')->with('success', 'Permission Changed Succesfully');
           }
      
        }

        return redirect('permission/' . $users->id . '/edit')->with('detach', 'You Entered wrong Password');
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

              if (file_exists(public_path()."assets\images\\". $user->photo->photo_tag)) {
                unlink(public_path(). "assets\images\\". $user->photo->photo_tag );
                }
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

