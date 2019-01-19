<?php

namespace App\Http\Controllers\fontside;
            use App\beststudents;
            use App\events;
            use App\testimonial;
            use App\slider;
            use App\staffs;
            use App\labaratory;
            use App\Blog;
            use App\Facts;
            use App\subscriber;
            use App\Http\Requests\homepagereq;
            use Illuminate\Http\Request;
            use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;


class PagesController extends Controller
{


    public function index()
    {
       
        // $event= events::all();
        // $test = testimonial::all();
        // $slider= slider::all();
        // $stafs = staffs::all();
        // $lab = labaratory::all();
        // $news = Blog::all();
        // $fact = Facts::all();
        // compact('bestdents','event','test','lab','stafs','slider','news','fact')


         return view('publics.index');
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
