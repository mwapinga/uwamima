<?php

namespace App\Http\Controllers;
use App\User;
use App\category;
use App\product;
use App\imports;
use App\Tempo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class tempoController extends Controller
{


public function index()
    {
            // $tempos = tempo::all();

   $tempos =tempo::where('type', 'export')->get();

       if($tempos->isEmpty())
        {
           $temp = 0;
        }
        else{

           $temp = $tempos;
        }
         $product = product::all();
         $category = category::all();
         return view('admin.exports.addMore' , compact('product' , 'category','temp'));

    }

public function sale()
    {

     $tempos =tempo::where('type', 'sales')->get();

       if($tempos->isEmpty())
        {
           $temp = 0;
        }
        else{

           $temp = $tempos;
        }
         $product = product::all();
         $category = category::all();
         return view('admin.sales.addMore' , compact('product' , 'category','temp'));

    }


public function create()
    {

        $tempos =tempo::where('type', 'import')->get();

     // $tmp =tempo::latest()->first();
     // $created = $tmp->created_at;
     // $current = Carbon::now();
     // $time = $current->diffInMinutes($created);

     // if($time >=10 ){

     //     tempo::query()->truncate();
     // }

       if($tempos->isEmpty())
        {
           $temp = 0;
        }
        else{

           $temp = $tempos;
        }
         $product = product::all();
         $category = category::all();
         return view('admin.imports.addMore' , compact('product' , 'category','temp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      // i used this for the photo upload since its doen after register
    public function store(Request $request)

    {
       $this->validate($request, [

           'product_id' => 'required',
           'category_id' => 'required',
           'quantity' => 'required|gte:1',
         ],
          [ 'quantity.gte' => 'The :attribute field can not be Less than 1.' ]
       );

         $input=$request->all();
         $catsid = $input['category_id'];
         $prodsid = $input['product_id'];
         $cats = category::where('id', $catsid )->get()->first();
         $catproId = $cats->product_id;

          if($prodsid != $catproId){
          return redirect()->back()->with('success','Invalid Category for Selected Product');
         }
           $input['type'] = "import";
          tempo::create($input);

          return redirect('addmore/create');

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


        $user = User::findOrFail($id);
        return view('admin.user.edit' , compact('user','roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function install(Request $request)
    {
        $this->validate($request, [

            'product_id' => 'required',
            'category_id' => 'required',
             'quantity' => 'required|gte:1',
         ],
          [ 'quantity.gte' => 'The :attribute field can not be Less than 1.' ]);

          $input=$request->all();
          $catsid = $input['category_id'];
          $prodsid = $input['product_id'];
          $cats = category::where('id', $catsid )->get()->first();
          $catproId = $cats->product_id;

           if($prodsid != $catproId){
           return redirect()->back()->with('success','Invalid Category for Selected Product');
          }
            $input['type'] = "export";
            tempo::create($input);

           return redirect('/addmore');

}

    public function saleinput(Request $request)
    {
        $this->validate($request, [

            'product_id' => 'required',
            'category_id' => 'required',
             'quantity' => 'required|gte:1',
             'price' => 'required|gte:1',
         ],
          [ 'quantity.gte' => 'The :attribute field can not be Less than 1.' , 
             'price.gte' => 'The :attribute field can not be Less than 1.'
               ]);

          $input=$request->all();
          $input['price'] = $input['quantity'] * $input['price'];
          $catsid = $input['category_id'];
          $prodsid = $input['product_id'];
          $cats = category::where('id', $catsid )->get()->first();
          $catproId = $cats->product_id;

           if($prodsid != $catproId){
           return redirect()->back()->with('success','Invalid Category for Selected Product');
          }
            $input['type'] = "sales";
            tempo::create($input);

           return redirect('/sale');

}

        public function update(Request $request, $id)
        {
            $this->validate($request, [

                'product_id' => 'required',
                'category_id' => 'required',
                'quantity' => 'required',

              ]);

              $input=$request->all();
              $catsid = $input['category_id'];
              $prodsid = $input['product_id'];
              $cats = category::where('id', $catsid )->get()->first();
              $catproId = $cats->product_id;

               if($prodsid != $catproId){
               return redirect()->back()->with('success','Invalid Category for Selected Product');
              }
                $input['type'] = "sales";
                tempo::create($input);

               return redirect('addmore/create');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        // I used this for udating password Boss
    public function destroy(Request $request, $id)
    {
          $temp= tempo::findorfail($id);

          if($temp->type == 'import')
          {
          $temp->delete();
          return redirect('addmore/create');
          }
          elseif($temp->type == 'export'){
            $temp->delete();
            return redirect('addmore');
          }
          elseif($temp->type == 'sales'){
            $temp->delete();
            return redirect('/sale');
          }

    }
}

