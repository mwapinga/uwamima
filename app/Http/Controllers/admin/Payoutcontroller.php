<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\model\admin\BlockPayout;
use App\model\admin\block;
use Carbon\Carbon;


class Payoutcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
          $tomorrow = Carbon::tomorrow();
           $this->validate($request, [
            'Name' => 'required|string|max:255',  
           'Date' => 'required|date|before:'.$tomorrow, 
           'amount' => 'required|numeric|gte:1',
         ],
                 [ 'amount.gte' => 'The :attribute field can not be Less than 1.' 
                 ]
       );

           $input = $request->all();
           BlockPayout::create($input);
           redirect('payout/'.$input['block_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $blck = block::findOrfail($id);
        $blckpay = BlockPayout::where('block_id',$id)->get();
        return view('admin.Blocks.payout',compact('blckpay','blck'));
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
