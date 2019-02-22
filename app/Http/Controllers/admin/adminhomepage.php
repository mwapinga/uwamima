<?php
 

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\model\admin\Instore;
use App\model\admin\product;
use App\model\admin\category;
use App\model\admin\imports;
use App\model\admin\exports;
use App\model\admin\Size;
use App\model\admin\Massage;

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

     $sms= Massage::orderBy('id','desc')->get();
     return view('admin.index',compact('sms'));
    
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
        $text = Massage::findOrfail($id);
        return view('admins.Contacts.index',compact('text'));
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
        $text = Massage::findOrfail($id);
        $text->delete();
        return redirect('uwadmin');
    }
}
