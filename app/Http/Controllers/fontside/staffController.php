<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\staffs;
use App\photo;
use Image;
use App\Http\Controllers\Controller;

class staffController extends Controller
{
     public function index()
    {   

        $sta= staffs::all();
        return view('admins.staffs.index' , compact('sta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.staffs.create');
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
           'post' => 'required',
           'photo_id'=>'required',
           'status'=>'required'
         ]);

         $input = $request->all();

        if($file = $request->file('photo_id')){
            $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
            // $resizedImg = Image::make($request->file('photo_id')->getRealPath())->resize(1920,820);
            // $file->move('images', $name);
            // $resizedImg = Image::make('images' .$name);
            // $resizedImg->resize(1920,820);
            $file->move('images', $name);
            $photo = photo::create(['photo_tag'=> $name]);
            $input['photo_id']=$photo->id;
        }
       

        staffs::create($input);
        return redirect('staff')->with('success', 'staff Added Succesfully');
        

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
        $sta= staffs::findOrFail($id);
        return view('admins.staffs.edit' , compact('sta'));
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
           'post' => 'required',
           'photo_id'=>'required',
           'status'=>'required'
         ]);
         

            $sta= staffs::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {  
            if (file_exists(public_path()."\images\\". $sta->photo->photo_tag)) {
              unlink(public_path()."\images\\". $sta->photo->photo_tag);
              $photos = photo::findorfail($sta->photo_id);
              $photos->delete();
            }
              
             $name = time() . $file->getClientOriginalName();
             $file->move('images', $name);
             $photo = photo::create(['photo_tag' => $name]);
             $input['photo_id']=$photo->id;

        }
              $sta->update($input);
              return redirect('staff')->with('success', 'staff Edited Succesfully');



}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sta= staffs::findorfail($id);

       if (file_exists(public_path()."\images\\". $sta->photo->photo_tag)) {
              unlink(public_path()."\images\\". $sta->photo->photo_tag);
              $photos = photo::findorfail($sta->photo_id);
              $photos->delete();
            }
          $sta->delete();
        return redirect('staff')->with('success','The staff Has been Deleted Succesfully');
    }

}
