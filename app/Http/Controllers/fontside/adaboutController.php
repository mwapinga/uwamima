<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\model\admin\about;

use App\Http\Controllers\Controller;

class adaboutController extends Controller
{
       public function index()
    {

    	$ab= about::all();

    	// return $ab;
        return view('admins.About.index', compact('ab'));

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    	$ab = about::findorFail($id);
         return view('admins.About.edit', compact('ab'));
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
             'about' => 'required',
         ]);


            $ab= about::findorFail($id);
            $input = $request->all();
            $ab->update($input);
              return redirect('ababout')->with('success', 'About us page Edited Succesfully');


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
