<?php

namespace App\Http\Controllers\fontside;
use App\model\admin\Blog;
use App\model\admin\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Cache;
use Image;

class blogscontroller extends Controller
{
   public function index()
    {

        $bloger= Blog::all();
        return view('admins.blogs.index' , compact('bloger'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.blogs.create');
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
           'header' => 'required|max:50',
           'Body' => 'required|max:100000',
           'photo_id' => 'required|file|mimes:jpeg,gif,png|max:8000',
         ]);

         $input = $request->all();

        if($file = $request->file('photo_id')){
            $name = rand(11111,99999).'_'.time() .'_'. $file->getClientOriginalName();
            $file->move('asset/images', $name);
            $thumbnailpath = public_path('asset/images/'.$name);
            $img = Image::make($thumbnailpath)->resize(960, 540)->save($thumbnailpath);
            $photo = Photo::create(['photo_tag'=> $name]);
            $input['photo_id']=$photo->id;
        }
        $value = Auth::user()->id;
        $input['user_id']= $value;
        Blog::create($input);
        return redirect('blog')->with('success', 'Post Added Succesfully');


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
        $blog= Blog::findOrFail($id);
        return view('admins.blogs.edit' , compact('blog'));
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
           'header' => 'required|max:50',
           'Body' => 'required|max:100000',
           'photo_id' => 'nullable|file|mimes:jpeg,gif,png|max:8000',
                    ]);

            $bloger= Blog::findorfail($id);

            $input = $request->all();

            if($file = $request->file('photo_id'))
        {
            if (file_exists(public_path()."\asset\images\\". $bloger->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\". $bloger->photo->photo_tag);
              $photos = Photo::findorfail($bloger->photo_id);
              $photos->delete();
            }

             $name = time() . $file->getClientOriginalName();
             $file->move('asset\images', $name);
             $thumbnailpath = public_path('asset/images/'.$name);
             $img = Image::make($thumbnailpath)->resize(960, 540)->save($thumbnailpath);
             $photo = photo::create(['photo_tag' => $name]);
             $input['photo_id']=$photo->id;
         }

              $value = Auth::user()->id;
              $input['user_id']= $value;
              $bloger->update($input);
              return redirect('blog')->with('success', 'Post Edited Succesfully');



}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bloger= Blog::findorfail($id);

       if (file_exists(public_path()."\asset\images\\". $bloger->photo->photo_tag)) {
              unlink(public_path()."\asset\images\\". $bloger->photo->photo_tag);
              $photos = Photo::findorfail($bloger->photo_id);
              $photos->delete();
            }
       $bloger->delete();
        return redirect('blog')->with('success','The Post Has been Deleted Succesfully');
    }
}
