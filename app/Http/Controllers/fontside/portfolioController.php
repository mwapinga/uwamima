<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\labaratory;
use App\photo;
use Image;
use App\Http\Controllers\Controller;

class portfolioController extends Controller
{
     public function index()
    {   

        $port= labaratory::all();
        return view('admins.portifolio.index' , compact('port'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.portifolio.create');
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
           'name' => 'required|max:25',
           'photo_id' => 'required|file|mimes:jpeg,gif,png|max:8000',
           'status'=>'required'
         ]);

         $input = $request->all();

        if($file = $request->file('photo_id')){
         $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
        $file->move('images/', $name);
        $thumbnailpath = public_path('images/'.$name);
        // $img = Image::make($thumbnailpath)->resize(1024, 640, function($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $img->save($thumbnailpath);    
          $img = Image::make($thumbnailpath)->resize(1220, 820)->save($thumbnailpath);   
         $photo = photo::create(['photo_tag'=> $name]);
         $input['photo_id']=$photo->id;
        }
       

        labaratory::create($input);
        return redirect('portfolio')->with('success', 'Portfolio Added Succesfully');
        

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
        $port= labaratory::findOrFail($id);
        return view('admins.portifolio.edit' , compact('port'));
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

          $this->validate($request, [
            'name' => 'required|max:25',
           'photo_id' => 'required|file|mimes:jpeg,gif,png|max:8000',
           'status'=>'required'
         ]);
         

            $port= labaratory::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {  
            if (file_exists(public_path()."\images\\". $port->photo->photo_tag)) {
              unlink(public_path()."\images\\". $port->photo->photo_tag);
              $photos = photo::findorfail($port->photo_id);
              $photos->delete();
            }
              
            $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
           $file->move('images/', $name);
           $thumbnailpath = public_path('images/'.$name);
        // $img = Image::make($thumbnailpath)->resize(1024, 640, function($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $img->save($thumbnailpath);    
          $img = Image::make($thumbnailpath)->resize(1220, 820)->save($thumbnailpath);   
         $photo = photo::create(['photo_tag'=> $name]);
         $input['photo_id']=$photo->id;
        }
              $port->update($input);
              return redirect('portfolio')->with('success', 'portfolio Edited Succesfully');



}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $port= labaratory::findorfail($id);

       if (file_exists(public_path()."\images\\". $port->photo->photo_tag)) {
              unlink(public_path()."\images\\". $port->photo->photo_tag);
              $photos = photo::findorfail($port->photo_id);
              $photos->delete();
            }
          $port->delete();
        return redirect('portfolio')->with('success','The portfolio Has been Deleted Succesfully');
    }
}
