<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\User;
use App\Regkey;
use Carbon\Carbon;
use App\TempoCode;
use \Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class hashkeyController extends Controller
{
 
        public function index(){


            $success  = null;
            $mail = null;
            
            return view('auth.passwords.email',compact('success','mail'));
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
       $this->validate($request, [
          'email' => 'required|string|email|max:255|exists:users,email',
         ]);

          $mail = $input['email'];
          $input = $request->all();
          $user = User::where('email',$mail)->get()->first();
         $code =  str_random(8);

         $user->update([
            
               'password' => Hash::make($code) 
         ]);

         $data = ['title' => 'Keep Safe this Information',

                 'Mail'=> ' Mail::  ' . ' ' .  $mail ,
                 'Password'=> 'New Password:: ' . ' ' . $code, 
                 'Massage' => 'Please Go to uwamima.or.tz/login And login with the above details Make sure you change your password after log in', 
                ];

         Mail::send('mail.signup' , $data , function($massage) use ($mail){

             $massage->to($mail)->subject('UWAMIMA NEW PASSWORD ');

         });
         $success = "Reset Passwordwas done Succesfully And New Password has been sent to your email";

         return view('auth.passwords.email',compact('success','mail'));
    
    }

public function code(Request $request)
    {   
         $this->validate($request, [
             'email' => 'required|string|email|max:255|exists:tempo_codes,email',
             'code' =>'required'
         ]);

         $input = $request->all();
         $tempo = TempoCode::where('email', $input['email'])->first();
         $codes = Crypt::decrypt($tempo->code);
         if($input['code'] === $codes){

            return redirect('/register');

         }
         else{
            return redirect()->back()->with('fail','You Entered the Wrong Code Please Check Your email');
         }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {     $fail = null;
          return view('auth.code',compact('fail'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
         

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
    public function destroy(Request $request,$id)
    {  

    }

}


