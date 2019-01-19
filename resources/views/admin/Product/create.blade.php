@extends('layouts.admin')


@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-6">
        <ol class="breadcrumb">
            @if (\Session::has('successp'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('successp') }}</p>
                                      </div><br />
                  @endif
          <li class="active"> <strong> Add Product </strong> </li>
        </ol>
      </div>
    </div>
          <div class="col-lg-6 top20">
          <div class="widgets-container">

     {!! Form::open(['method'=>'POST','route'=> 'product.store']) !!}  
         <div class="form-group ">
                {!! Form::label('name', 'Product Name:') !!}
                {!! Form::text('name', null , ['class'=>'form-control']) !!}
             @if ($errors->has('name'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
               </div>    
            @endif
         </div>
         <div class="form-group">
           {!! Form::submit('ADD PRODUCT', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
          </div>
        </div>
      
        <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-6">
        <ol class="breadcrumb">
        
        </ol>
      </div>
    </div>
          <div class="col-lg-6 top20">
          <div class="widgets-container">
              @if (\Session::has('successcat'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('successcat') }}</p>
                                      </div><br />
                  @endif
            <label>Add Category For Product</label>
            <hr>
      {!! Form::open(['method'=>'POST','route'=> 'product.category.add'] ) !!}  
           <div class="form-group col-xs-12 col-sm-3">
                <label>Select Product</label>                     
                <select id="product_id" name="product_id" class="form-control required bottom15{{ $errors->has('product_id') ? ' is-invalid' : '' }}">
                    @foreach($product as $index => $prods)
                    <option value="{{ $prods->id }}" > {{ $prods->name }} </option>
                    @endforeach
                  </select>

                @if ($errors->has('product_id'))
                <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('product_id') }}</strong>
                    </span>
                      </div>
                @endif

             </div>

         <div class="form-group col-xs-12 col-sm-3 ">
                {!! Form::label('Catname', 'Type Name:') !!}
                {!! Form::text('Catname', null , ['class'=>'form-control']) !!}

             @if ($errors->has('Catname'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('Catname') }}</strong>
                </span>
               </div>    
            @endif
        
         </div>
         <div class="form-group">
           {!! Form::submit('Add Category', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
          </div>
        </div>


            <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-6">
        <ol class="breadcrumb">
        
        </ol>
      </div>
    </div>
          <div class="col-lg-6 top20">
          <div class="widgets-container">
              @if (\Session::has('successsizec'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('successsizec') }}</p>
                                      </div><br />
                  @endif
            <label>Add Size For Category</label>
            <hr>
      {!! Form::open(['method'=>'POST','route'=> 'product.size.add'] ) !!}  
            <div class="form-group col-xs-12 col-sm-3">
             <label>Select Category</label>
             <select id="category_id" name="category_id" class="form-control", required>
                   @foreach($category as $index => $cats)
                    <option value="{{ $cats->id }}" > {{ $cats->name }} </option>
                 @endforeach
             </select>
                @if ($errors->has('category_id'))
                      <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                   </div>
                @endif
             </div>

         <div class="form-group col-xs-12 col-sm-3 ">
                {!! Form::label('sizename', 'Size Value:') !!}
                {!! Form::text('sizename', null , ['class'=>'form-control']) !!}

             @if ($errors->has('sizename'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sizename') }}</strong>
                </span>
               </div>    
            @endif
        
         </div>
         <div class="form-group">
           {!! Form::submit('Add Size', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
          </div>
        </div>


            <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-6">
        <ol class="breadcrumb">
        
        </ol>
      </div>
    </div>
          <div class="col-lg-6 top20">
          <div class="widgets-container">
              @if (\Session::has('successsize'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('successsize') }}</p>
                                      </div><br />
                  @endif

            <label>Add Size For Product</label>
            <hr>
      {!! Form::open(['method'=>'POST','route'=> 'product.size.add'] ) !!}  
           <div class="form-group col-xs-12 col-sm-3">
                <label>Select Product</label>                     
                <select id="product_id" name="product_id" class="form-control required bottom15{{ $errors->has('product_id') ? ' is-invalid' : '' }}">
                    @foreach($product as $index => $prods)
                    <option value="{{ $prods->id }}" > {{ $prods->name }} </option>
                    @endforeach
                  </select>

                @if ($errors->has('product_id'))
                <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('product_id') }}</strong>
                    </span>
                      </div>
                @endif

             </div>

         <div class="form-group col-xs-12 col-sm-3 ">
                {!! Form::label('sizenameprod', 'Size Value:') !!}
                {!! Form::text('sizenameprod', null , ['class'=>'form-control']) !!}

             @if ($errors->has('sizenameprod'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sizenameprod') }}</strong>
                </span>
               </div>    
            @endif
        
         </div>
         <div class="form-group">
           {!! Form::submit('Add Size', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
          </div>
        </div>



  </div>
</div>
@stop
