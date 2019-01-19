<?php
 

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\model\admin\Instore;
use App\model\admin\product;
use App\model\admin\category;
use App\model\admin\imports;
use App\model\admin\exports;
use App\model\admin\Size;

use App\Http\Controllers\Controller;

class adminhomepage extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       include("linkupinstore.php");
       $imp = imports::all();
       $exp = exports::all();

    return view('admin.index', compact('exp','exp','totalnumCharcoal','totalnumPolE','totalnumPolB','TotalPain1x4','TotalPain1x6','TotalPain1x8','TotalPain1x10','TotalPain2x2','TotalPain2x3','TotalPain2x4','TotalPain2x6','Totalgrevelia1x4','Totalgrevelia1x6','Totalgrevelia1x8','Totalgrevelia1x10','Totalgrevelia2x2','Totalgrevelia2x3','Totalgrevelia2x4','Totalgrevelia2x6','Totaleucalyptes1x4','Totaleucalyptes1x6','Totaleucalyptes1x8','Totaleucalyptes1x10','Totaleucalyptes2x2','Totaleucalyptes2x3','Totaleucalyptes2x4','Totaleucalyptes2x6'));
    
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
