<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\admin\report;
use App\model\admin\Photo;

class AdreportControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
   
        $rep = report::with('photo')->orderBy('id','desc')->get();
        return view('admins.report.index',compact('rep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.report.create');
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
           'photo_id' => 'required|file|mimes:doc,pdf,docx,zip|max:8000',
           'status'=>'required'
         ]);

         $input = $request->all();

        if($file = $request->file('photo_id')){
         $name =  time() .'_'. $file->getClientOriginalName();
         $file->move('asset/file/', $name);
         $photo = Photo::create(['photo_tag'=> $name]);
         $input['photo_id']=$photo->id;
        }


        report::create($input);
        return redirect('rep')->with('success', 'Report Added Succesfully');

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
        $rep = report::findOrfail($id);
        return view('admins.report.edit',compact('rep'));
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
            'name' => 'required|max:1000',
           'photo_id' => 'nullable|file|mimes:doc,pdf,docx,zip|max:8000',
           'status'=>'required'
         ]);


            $rep= report::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {
            if (file_exists(public_path()."\asset\file\\". $rep->photo->photo_tag)) {
              unlink(public_path()."\asset\file\\". $rep->photo->photo_tag);
              $photos = Photo::findorfail($rep->photo_id);
              $photos->delete();
            }

            $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
           $file->move('asset/file/', $name);
         $photo = Photo::create(['photo_tag'=> $name]);
         $input['photo_id']=$photo->id;
        }
              $rep->update($input);
              return redirect('rep')->with('success', 'Report Edited Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rep= report::findOrfail($id);

       if (file_exists(public_path()."\asset\file\\". $rep->photo->photo_tag)) {
              unlink(public_path()."\asset\file\\". $rep->photo->photo_tag);
              $photos = Photo::findorfail($rep->photo_id);
              $photos->delete();
            }
          $rep->delete();
        return redirect('rep')->with('success','The Report Has been Deleted Succesfully');
    }
}
