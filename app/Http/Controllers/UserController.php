<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Photo;
use Image;
use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $user= User::all();
          return view('admin.user.index',compact('user') );


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
        return view('admin.user.show' , compact('user'));

        
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
        $roles= Role::findorfail($user->role_id);
        return view('admin.user.edit' , compact('user','roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
           $user= User::findorfail($id);

         $input = $request->all();
     
        if($file = $request->file('photo_id'))
        {  
            if (file_exists(public_path()."\assets\images\\". $user->photo->photo_tag)) {
              unlink(public_path()."\assets\images\\". $user->photo->photo_tag);
              $photos = photo::findorfail($user->photo_id);
              $photos->delete();
            }
              
             $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
             $file->move('assets/images/', $name);
             $thumbnailpath = public_path('assets/images/'.$name);  
             $img = Image::make($thumbnailpath)->resize(60,60)->save($thumbnailpath);   
            $photo = photo::create(['photo_tag'=> $name]);
            $input['photo_id']=$photo->id;
        }

         $user->update($input);

        return redirect('uwadminuser')->with('success', 'User Edited Succesfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $user= User::findorfail($id);
        unlink(public_path(). "assets/images/". $user->photo->photo_tag );
        $user->delete();
        return redirect('uwadminuser')->with('success', 'User Deleted Succesfully'); 

    }
}
