<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\model\admin\Photo;
use App\model\admin\testimonial;
use Image;
use App\Http\Controllers\Controller;

class testimonialController extends Controller
{

    public function index()
    {

        $test= testimonial::all();
        return view('admins.testimonial.index' , compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.testimonial.create');
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
           'name' => 'required',
           'surname' => 'required',
           'Testimonial' => 'required',
           'photo_id' => 'required|file|mimes:jpeg,gif,png|max:8000',
           'status'=>'required'
         ]);

         $input = $request->all();

        if($file = $request->file('photo_id')){
            $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
            $file->move('asset/images', $name);
            $photo = Photo::create(['photo_tag'=> $name]);
            $input['photo_id']=$photo->id;
        }


        testimonial::create($input);
        return redirect('testimonial')->with('success', 'Testimonial Added Succesfully');


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
        $test= testimonial::findOrFail($id);
        return view('admins.testimonial.edit' , compact('test'));
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
            'name' => 'required',
           'surname' => 'required',
           'Testimonial' => 'required',
           'photo_id' => 'nullable|file|mimes:jpeg,gif,png|max:8000',
           'status'=>'required'
         ]);


            $test= testimonial::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {
            if (file_exists(public_path()."\asset\images\\".$test->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\".$test->photo->photo_tag);
              $photos = Photo::findorfail($test->photo_id);
              $photos->delete();
            }

             $name = time() . $file->getClientOriginalName();
             $file->move('asset\images', $name);
             $photo = Photo::create(['photo_tag' => $name]);
             $input['photo_id']=$photo->id;

        }
              $test->update($input);
              return redirect('testimonial')->with('success', 'Testimonial Edited Succesfully');



}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test= testimonial::findorfail($id);

       if (file_exists(public_path()."\asset\images\\". $test->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\". $test->photo->photo_tag);
              $photos = Photo::findorfail($test->photo_id);
              $photos->delete();
            }
          $test->delete();
        return redirect('testimonial')->with('success','The testimonial Has been Deleted Succesfully');
    }

}
