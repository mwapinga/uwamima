<?php

namespace App\Http\Controllers\fontside;
            // use App\model\admin\beststudents;
            use App\model\admin\event;
            use App\model\admin\testimonial;
            use App\model\admin\slider;
            // use App\model\admin\staffs;
            use App\model\admin\subscriber;
            use Illuminate\Http\Request;
            use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use App\model\admin\portfolio;
use App\model\admin\blog;
use App\model\admin\Facts;


class PagesController extends Controller
{


    public function index()
    {

        $event= event::with('photo')->orderBy('id','desc')->take(1)->get();
        $test = testimonial::with('photo')->orderBy('id','desc')->take(5)->get();
        $slider= slider::with('photo')->orderBy('id','desc')->take(5)->get();
        $port = portfolio::with('photo')->orderBy('id','desc')->get();
        $news = blog::with('photo')->orderBy('id','desc')->take(3)->get();
        $mission = Facts::where('name','OUR MISSION')->get()->first();
        $vision = Facts::where('name','OUR VISION')->get()->first();
        $wedo = Facts::where('name','WHAT WE DO')->get()->first();
        $back = Facts::where('name','BACKGROUND')->get()->first();


        return view('publics.index', compact('bestdents','event','test','port','stafs','slider','news','facts','mission','vision','wedo','back'));

    }

    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(homepagereq $request)
    {
                $data = $request->all();
                subscriber::create($data);
                return redirect('/#sub')->with('success', 'Thanks for Your Subscription');

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


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }
}
