<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\admin\blog;
use App\model\admin\Comment;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $news = blog::with('photo')->orderBy('id','desc')->take(7)->get();
            $blg = blog::with('photo')->orderBy('id','desc')->take(3)->get();
            return view('publics.blog',compact('news','blg'));

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
        $input = $request->all();

        $this->validate($request, [
          'name' => 'nullable|string|max:255',
          'email' => 'nullable|string|email|max:255',
          'comment' =>'required|string|max:10000',
        ]);

        // $blg  = blog::findOrfail($input['blog_id']);
        $comm = Comment::create($input);
        return redirect()->back()->with('success','Thanks for your Comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $blg = blog::findOrfail($id);
         $news = blog::with('photo')->where('status',1)->orderBy('id','desc')->take(3)->get();
         return view('publics.singleblog',compact('blg','news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
