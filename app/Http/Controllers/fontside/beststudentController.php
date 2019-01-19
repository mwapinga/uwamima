<?php

namespace App\Http\Controllers\fontside;
use App\photo;
use App\beststudents;
use Illuminate\Http\Request;
use Image;

class beststudentController extends Controller
{
     public function index()
    {   

        $bs= beststudents::all();
        return view('admins.students.index' , compact('bs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.students.create');
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
           'Reglvl' => 'required',
           'Natlvl' => 'required',
           'year' => 'required',
           'photo_id'=>'required',
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
          $img = Image::make($thumbnailpath)->resize(620, 417)->save($thumbnailpath);   
         $photo = photo::create(['photo_tag'=> $name]);
         $input['photo_id']=$photo->id;
        }
       

        beststudents::create($input);
        return redirect('beststudent')->with('success', 'students Added Succesfully');
        

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
        $bs= beststudents::findOrFail($id);
        return view('admins.students.edit' , compact('bs'));
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
           'Reglvl' => 'required',
           'Natlvl' => 'required',
           'year' => 'required',
           'photo_id'=>'required',
         ]);
         

            $bs= beststudents::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {  
            if (file_exists(public_path()."\images\\". $bs->photo->photo_tag)) {
              unlink(public_path()."\images\\". $bs->photo->photo_tag);
              $photos = photo::findorfail($bs->photo_id);
              $photos->delete();
            }
              
              $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
             $file->move('images/', $name);
             $thumbnailpath = public_path('images/'.$name);
        // $img = Image::make($thumbnailpath)->resize(1024, 640, function($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $img->save($thumbnailpath);    
          $img = Image::make($thumbnailpath)->resize(620, 417)->save($thumbnailpath);   
            $photo = photo::create(['photo_tag'=> $name]);
            $input['photo_id']=$photo->id;
        }

              $bs->update($input);
              return redirect('beststudent')->with('success', 'students Edited Succesfully');



}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bs= beststudents::findorfail($id);

       if (file_exists(public_path()."\images\\". $bs->photo->photo_tag)) {
              unlink(public_path()."\images\\". $bs->photo->photo_tag);
              $photos = photo::findorfail($bs->photo_id);
              $photos->delete();
            }
       $bs->delete();
        return redirect('beststudent')->with('success','The student Has been Deleted Succesfully');
    }
}
