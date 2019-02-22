<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\admin\ChairM;
use App\model\admin\Photo;
use Image;
use \Cache;
class ChairControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ChairM = ChairM::all();

        return view('admins.chairMassage.index', compact('ChairM'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       $ChairM = ChairM::findOrfail($id);
        return view('admins.chairMassage.edit', compact('ChairM'));
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
            'name' => 'required|max:150',
           'massage' => 'required|max:10000',
            'photo_id' => 'nullable|file|mimes:jpeg,gif,png|max:8000',
         ]);


            $chair= ChairM::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {
            if (file_exists(public_path()."\asset\images\\". $chair->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\". $chair->photo->photo_tag);
              $photos = Photo::findorfail($chair->photo_id);
              $photos->delete();
            }

             $name = time() . $file->getClientOriginalName();
             $file->move('asset\images', $name);
             $thumbnailpath = public_path('asset/images/'.$name);
             $img = Image::make($thumbnailpath)->resize(420, 420)->save($thumbnailpath);
             $photo = Photo::create(['photo_tag' => $name]);
             $input['photo_id']=$photo->id;

        }
              $chair->update($input);
              return redirect('chairm')->with('success', 'ChiarMan Message Edited Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
