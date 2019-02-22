<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\model\admin\portfolio;
use App\model\admin\Photo;
use Image;
use App\Http\Controllers\Controller;

class portfolioController extends Controller
{
     public function index()
    {

        $port= portfolio::with('photo')->orderBy('id','desc')->take(15)->get();
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
           'name' => 'required|max:1000',
           'photo_id' => 'nullable|file|mimes:jpeg,gif,png|max:8000',
           'status'=>'required'
         ]);

         $input = $request->all();

        if($file = $request->file('photo_id')){
         $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
        $file->move('asset/images/', $name);
        $thumbnailpath = public_path('asset/images/'.$name);
          $img = Image::make($thumbnailpath)->resize(400, 350)->save($thumbnailpath);
         $photo = Photo::create(['photo_tag'=> $name]);
         $input['photo_id']=$photo->id;
        }


        portfolio::create($input);
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
        $port= portfolio::findOrFail($id);
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
            'name' => 'required|max:10000',
            'photo_id' => 'nullable|file|mimes:jpeg,gif,png|max:8000',
           'status'=>'required'
         ]);


            $port= portfolio::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {
            if (file_exists(public_path()."\asset\images\\". $port->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\". $port->photo->photo_tag);
              $photos = Photo::findorfail($port->photo_id);
              $photos->delete();
            }

            $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
           $file->move('asset/images/', $name);
           $thumbnailpath = public_path('asset/images/'.$name);

          $img = Image::make($thumbnailpath)->resize(400, 350)->save($thumbnailpath);
         $photo = Photo::create(['photo_tag'=> $name]);
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
        $port= portfolio::findorfail($id);

       if (file_exists(public_path()."\asset\images\\". $port->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\". $port->photo->photo_tag);
              $photos = Photo::findorfail($port->photo_id);
              $photos->delete();
            }
          $port->delete();
        return redirect('portfolio')->with('success','The portfolio Has been Deleted Succesfully');
    }
}
