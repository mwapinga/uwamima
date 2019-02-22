<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\model\admin\slider;
use App\model\admin\Photo;
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
    public function store(Request $request)
    {
        $this->validate($request, [
        'tags1' => 'nullable| max:150 | string',
        'tags2' => 'nullable| max:150 | string',
        'photo_id' => 'required|file|mimes:jpeg,gif,png|max:8000',
        'status'  => 'required',
          ]);

         $input = $request->all();

        if($file = $request->file('photo_id')){

        $name = rand(11111,99999).'_'.time() .'__'. $file->getClientOriginalName();
        $file->move('asset/images/', $name);
        $thumbnailpath = public_path('asset/images/'.$name);
         $img = Image::make($thumbnailpath)->resize(1920, 970)->save($thumbnailpath);
         $photo = Photo::create(['photo_tag'=> $name]);
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tags1' => 'nullable| max:150 | string',
            'tags2' => 'nullable| max:150 | string',
            'photo_id' => 'nullable|file|mimes:jpeg,gif,png|max:8000',
            'status'  => 'required',
              ]);

          $slide= slider::findorfail($id);

        $input = $request->all();

        if($file = $request->file('photo_id'))
        {
            if (file_exists(public_path()."\asset\images\\". $slide->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\". $slide->photo->photo_tag);
              $photos = Photo::findorfail($slide->photo_id);
              $photos->delete();
            }

        $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
        $file->move('asset/images/', $name);
        $thumbnailpath = public_path('asset/images/'.$name);
          $img = Image::make($thumbnailpath)->resize(1920, 970)->save($thumbnailpath);
         $photo = Photo::create(['photo_tag'=> $name]);
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

       if (file_exists(public_path()."\asset\images\\". $slide->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\". $slide->photo->photo_tag);
              $photos = Photo::findorfail($slide->photo_id);
              $photos->delete();
            }
       $slide->delete();
        return redirect('slide')->with('succes','The slide Has been Deleted Succesfuully');
    }
}
