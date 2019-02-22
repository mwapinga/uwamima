<?php

namespace App\Http\Controllers\fontside;

use Illuminate\Http\Request;
use App\model\admin\staffs;
use App\model\admin\about;
use App\model\admin\Facts;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$abt = about::all();
    //  $stafs = staffs::all();
    //  $fact = Facts::all();
    $mission = Facts::where('name','OUR MISSION')->get()->first();
    $vision = Facts::where('name','OUR VISION')->get()->first();
    $wedo = Facts::where('name','WHAT WE DO')->get()->first();
    $back = Facts::where('name','BACKGROUND')->get()->first();
         return view('publics.About_us', compact('stafs','abt','fact','mission','vision','wedo','back'));

         $photo = photo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.About.create');
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
