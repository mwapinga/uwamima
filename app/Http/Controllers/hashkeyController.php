<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\User;
use App\Regkey;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class hashkeyController extends Controller
{
       public function index()
    { 
           return view('auth.lock');
     
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
          'email' => 'required|string|email|max:255|exists:regkeys,email',
          'key'   =>'required|string',
         ]);        
      $input = $request->all();
      $regkey = Regkey::where('email', $input['email'])->get()->first();
      $key = $input['key'];
      $current = Carbon::now();
      

    if ($regkey){
      
    	$inkey = $regkey->key;

        $created = $regkey->created_at;
        $time = $current->diffInHours($created); 
    	if ($key == $inkey) { 		
			    	               if($regkey->status){

														$user= User::where('email', $input['email'])->get()->first();

														if($user){

														return redirect()->back()->with('error','User Arleady have an account Please Login');
														}

														if ($time<=24) {
														return redirect('/register');
														}

														return redirect()->back()->with('error','Your Key Has arleady expired PLease ask for new key');
													}
                                            
                           $regkey->update([ 
						        'status'=>1
								]);
                            return redirect('/register');
    	                         }
    	              return redirect()->back()->with('error','Your Entered an Invalid Key');
        }  

         return redirect()->back()->with('error','Your Entered an Invalid Email');
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


