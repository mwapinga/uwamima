<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Photo;
use App\block;
use Image;
use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        // this is for changing password for user 

    public function index()
    {
 
     return view('admin.user.chpp');

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
      // i used this for the photo upload since its doen after register 
    public function store(Request $request)

    {   
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

        return redirect('uwadminuser/'.Auth::user()->id)->with('success', 'Photo Succesfully Uploaded'); 
    }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
           public function show($id)
    {

        $user = User::findOrFail($id);
        $blck = block::where('user_id',$id)->get();
        return view('admin.user.show' , compact('user','blck'));      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $user = User::findOrFail($id);
        return view('admin.user.edit' , compact('user','roles'));

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
            'username' => 'required|string',Rule::unique('users')->ignore($user->id),
            'gender' => 'required|boolean',
            'borndate'  => 'required|date',
            'adress' => 'required|string|max:255',
            'phone' => 'required|numeric|digits:10',
        ]);

             $input = $request->all();  

             $user->update($input);
             return redirect('uwadminuser')->with('success', 'User Edited Succesfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
        // I used this for udating password Boss
    public function destroy(Request $request, $id)
    {
       
            $this->validate($request, [
             'old_password' =>'required',
             'password' => 'required|string|min:6|confirmed',
              ]);

              $users = Auth::user();
              $input = $request->all();
              $password = $input['old_password'];
              $email = Auth::user()->email;

               if (Auth::attempt(['email' => $email, 'password' => $password])) {
                    unset($input['old_password']);
                    $users->update([
                         'password'=>Hash::make($input['password'])
                        ]);

                return redirect('uwadminuser/'.Auth::user()->id)->with('success', 'Password Changed Succesfully');
               }

        return redirect('uwadminuser')->with('success', 'You Entered wrong Password');

    }
}
