<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\events;
use App\photo;
use Image;

use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index()
    {   

        $ev= events::all();
        return view('admins.events.index' , compact('ev'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.events.create');
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
           'name' => 'required|max:50',
           'details' => 'required|max:500',
           'date' => 'required',
           'photo_id'=>'required',
           'status'=>'required'
         ]);

         $input = $request->all();

        if($file = $request->file('photo_id')){
            $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = photo::create(['photo_tag'=> $name]);
            $input['photo_id']=$photo->id;
        }
       

        events::create($input);
        return redirect('event')->with('success', 'Event Added Succesfully');
        

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
        $ev= events::findOrFail($id);
        return view('admins.events.edit' , compact('ev'));
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
            'name' => 'required|max:50',
           'details' => 'required|max:500',
           'date' => 'required',
           'photo_id'=>'required',
           'status'=>'required'
         ]);
         

            $ev= events::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {  
            if (file_exists(public_path()."\images\\". $ev->photo->photo_tag)) {
              unlink(public_path()."\images\\". $ev->photo->photo_tag);
              $photos = photo::findorfail($ev->photo_id);
              $photos->delete();
            }
              
             $name = time() . $file->getClientOriginalName();
             $file->move('images', $name);
             $photo = photo::create(['photo_tag' => $name]);
             $input['photo_id']=$photo->id;

        }
              $ev->update($input);
              return redirect('event')->with('success', 'Events Edited Succesfully');



}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ev= events::findorfail($id);

       if (file_exists(public_path()."\images\\". $ev->photo->photo_tag)) {
              unlink(public_path()."\images\\". $ev->photo->photo_tag);
              $photos = photo::findorfail($ev->photo_id);
              $photos->delete();
            }
       $ev->delete();
        return redirect('event')->with('success','The events Has been Deleted Succesfully');
    }
}
