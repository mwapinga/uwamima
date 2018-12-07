<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imports;
use App\exports;
use App\sales;
use App\order;
use Carbon\Carbon;

class ReportController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

    	 $imp = 0;
         return view('admin.report.impreport',compact('imp'));
    }

       public function salereport()
    {    

         $sale = 0;
         return view('admin.report.salereport',compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    	 $exp = 0;
         return view('admin.report.expreport',compact('exp'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    

    	  $impo = imports::oldest()->first();
    	  $date = $impo->created_at->subDays(1)->toDateString();

           $this->validate($request, [
            'fromdate' => 'required|date|before:today',
            'Enddate' => 'required|date|before:today',
        ]);

           $input = $request->all();
           $from = $input['fromdate'];
           $to = $input['Enddate'];
            if ($from === $to) {
            	
           $imp =imports::whereRaw('DATE(date) = ?', [$from])->get();

           return view('admin.report.impreport',compact('imp','from','to'));
            	 
            }

           $imp = imports::whereBetween('date', [$from, $to])->get();
            return view('admin.report.impreport',compact('imp','from','to'));
          
    }

        public function export(Request $request)
    {    

    	  $expo = exports::oldest()->first();
    	  $date = $expo->created_at->subDays(1)->toDateString();

           $this->validate($request, [
            'fromdate' => 'required|date|before:today',
            'Enddate' => 'required|date|before:today'
            ,]);

           $input = $request->all();
           $from = $input['fromdate'];
           $to = $input['Enddate'];
            if ($from === $to) {
            	
           $exp =exports::whereRaw('DATE(date) = ?', [$from])->get();

           return view('admin.report.expreport',compact('exp','from','to'));
            	 
            }

           $exp = exports::whereBetween('date', [$from, $to])->get();
           
           return view('admin.report.expreport',compact('exp','from','to'));
           
          
    } 


        public function saleput(Request $request)
    {    

          // $sale = sales::oldest()->first();
          // $date = $expo->created_at->subDays(1)->toDateString();

           $this->validate($request, [
            'fromdate' => 'required|date|before:today',
            'Enddate' => 'required|date|before:today'
            ,]);

           $input = $request->all();
           $from = $input['fromdate'];
           $to = $input['Enddate'];
            if ($from === $to) {
                
           $sale =sales::whereRaw('DATE(date) = ?', [$from])->get();

           return view('admin.report.salereport',compact('sale','from','to'));
                 
            }

           $sale = sales::whereBetween('date', [$from, $to])->get();
           
           return view('admin.report.salereport',compact('sale','from','to'));
           
          
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
