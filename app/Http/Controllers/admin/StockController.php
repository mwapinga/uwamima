<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\admin\product;
use App\model\admin\category;
use App\model\admin\Size;

class StockController extends Controller  //products Controll
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $prod = product::with('category','size')->orderBy('id','asc')->get();
       $cats = category::with('size')->orderBy('id','asc')->get();
       return view('admin.Product.index',compact('prod','cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $product = product::all();
        $category = category::all();
        $size = Size::all();
       return view('admin.Product.create',compact('product','category','size'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $this->validate($request, [
                       'name' => 'required|string|max:255|unique:products' ]);

                $input = $request->all();
                product::create($input);
                return redirect()->back()->with('successp','Category Added succesfully');;
              
    }

    public function sizeinput(Request $request){

        $input = $request->all();

        if(isset($input['product_id'])){

                  $this->validate($request, [
                       'sizenameprod' => 'required|max:255' ]);
                $prodid = $input['product_id'];
                $prod = product::findOrfail($prodid);

                $check = Size::where('size',$input['sizenameprod'])->get()->first();
                if($check){

                    foreach ($prod->size as $value) {
                        if($value->id == $check->id){
                            return redirect()->back()->with('successsize','Size Eixsted arleady'); 
                        }
                      }


                     $prod->size()->attach($check);
                    return redirect()->back()->with('successsize','Size Added succesfully');
                }
                else{

                    $size= Size::create([
                     'size'=> $input['sizenameprod']
                     ]);
                    $prod->size()->attach($size);
                    return redirect()->back()->with('successsize','Size Added succesfully');
                }
            }

         elseif(isset($input['category_id'])){

                 $this->validate($request, [
                       'sizename' => 'required|max:255' ]);
                $catid = $input['category_id'];
                $cats = category::findOrfail($catid);

                $check = Size::where('size',$input['sizename'])->get()->first();
                if($check){
                      foreach ($cats->size as $value) {
                        if($value->id == $check->id){
                            return redirect()->back()->with('successsizec','Size Eixsted arleady'); 
                        }
                      }
                     $cats->size()->attach($check);
                    return redirect()->back()->with('successsizec','Size Added succesfully');
                }
                else{

                    $size= Size::create([
                     'size'=> $input['sizename']
                     ]);
                    $cats->size()->attach($size);
                    return redirect()->back()->with('successsizec','Size Added succesfully');
                } 
               }
               else{
                redirect()->back();
               }
    }

       public function typeinput(Request $request){


            $this->validate($request, [
                       'Catname' => 'required|string|max:255|unique:categories,name' ]);
              
                $input = $request->all();
                $prodid = $input['product_id'];

                $cats = category::create([
                     'name' => $input['Catname']
                ]);

                   $prod = product::findOrfail($prodid);
                   $prod->category()->save($cats);
              return redirect()->back()->with('successcat','Category Added succesfully');
    }

    public function sizedel(Request $request, $id){

        $size = Size::find($id);
        $input = $request->all();
        if(isset($input['product_id']))
        { 
            $prodid = $input['product_id'];
            $prod = product::where('id',$prodid)->get()->first();
            $prod->size()->detach($size);
            if(is_null($size->product) && is_null($size->category)){
              $size->delete();  
            }

            return redirect()->back();
        }

        elseif(isset($input['category_id']))
        {  
            $catid = $input['category_id'];
            $cat = category::where('id',$catid)->get()->first();
            $cat->size()->detach($size);
            if(is_null($size->product) && is_null($size->category)){
              $size->delete(); 
          }

            return redirect()->back();
        }

        else{
                    return redirect()->back();
        }
        
        
    }

     public function typedel($id){

        $cats = category::find($id);
        $cats->delete();
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = product::findOrfail($id);
        return view('admin.Product.addMore',compact('prod'));
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
        $prod = product::findOrfail($id);
        $prod->delete();
        return redirect('product')->with('succesp' , 'Product deleted succesfully');
    }
}
