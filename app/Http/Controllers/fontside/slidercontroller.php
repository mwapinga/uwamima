<?php

namespace App\Http\Controllers\fontside;

//use Illuminate\Http\Request;
use App\slider;
use App\photo;
use App\Http\Requests\Admin1REequest;
use Carbon\Carbon;
use Image;
use App\Http\Controllers\Controller;

class slidercontroller extends Controller
{
       public function index()
    {   

     $slider= slider::all();
        return view('admins.slider.index' , compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Admin1REequest $request)
    {
         $input = $request->all();

        if($file = $request->file('photo_id')){

        $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
        $file->move('images/', $name);
        $thumbnailpath = public_path('images/'.$name);        
         $img = Image::make($thumbnailpath)->resize(1024, 640)->save($thumbnailpath); 
         $photo = photo::create(['photo_tag'=> $name]);
         $input['photo_id']=$photo->id;
        }
        slider::create($input);
        return redirect('slide')->with('success', 'Slider Added Succesfully');
        

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
        $slide = slider::findOrFail($id);
        return view('admins.slider.edit' , compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Admin1REequest $request, $id)
    {
          $slide= slider::findorfail($id);
   
        $input = $request->all();

        if($file = $request->file('photo_id'))
        {  
            if (file_exists(public_path()."\images\\". $slide->photo->photo_tag)) {
              unlink(public_path()."\images\\". $slide->photo->photo_tag);
              $photos = photo::findorfail($slide->photo_id);
              $photos->delete();
            }

        $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
        $file->move('images/', $name);
        $thumbnailpath = public_path('images/'.$name);
        // $img = Image::make($thumbnailpath)->resize(1024, 640, function($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $img->save($thumbnailpath);    
          $img = Image::make($thumbnailpath)->resize(1120, 580)->save($thumbnailpath);   
         $photo = photo::create(['photo_tag'=> $name]);
         $input['photo_id']=$photo->id;
            
              }
    
              $slide->update($input);
              return redirect('slide')->with('success', 'Slider Edited Succesfully');



}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide= slider::findorfail($id);

       if (file_exists(public_path()."\images\\". $slide->photo->photo_tag)) {
              unlink(public_path()."\images\\". $slide->photo->photo_tag);
              $photos = photo::findorfail($slide->photo_id);
              $photos->delete();
            }
       $slide->delete();
        return redirect('slide')->with('succes','The slide Has been Deleted Succesfuully');
    }
}
