@extends('layouts.admin')



@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> EDIT IMPORT </h2>
        <ol class="breadcrumb">
          <li class="active"> <strong>Edit Import  Form </strong> </li>
        </ol>
      </div>
    </div>

          <div class="col-lg-12 top20">
          <div class="widgets-container">
            <h5>Fill the form Below</h5>

         {!! Form::model($sale, ['method'=>'PATCH','action'=> ['uwadminsales@update' , $sale->id ]]) !!}
             {!! Form::hidden('id', $sale->id) !!}
             <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('name', 'Seller Name:') !!}
                {!! Form::text('name', $sale->user->name , ['class'=>'form-control','required']) !!}
             @if ($errors->has('name'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
               </div>    
            @endif
        
         </div>

         <div class="form-group col-xs-12 col-sm-3">
            <label>Product Name</label>
            <select id="product_id" name="product_id" class="form-control bottom15{{ $errors->has('product_id') ? ' is-invalid' : '' }}">
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
         <div class="form-group col-xs-12 col-sm-3">
         <label>Category Name</label>
         <select id="category_id" name="category_id" class="form-control" required>
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
            @if (\Session::has('success'))
                  <div class="alert alert-danger">
                  <p>{{ \Session::get('success') }}</p>
                    </div><br />
             @endif

         </div>  
          <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('quantity', 'Quantity:') !!}
                {!! Form::number('quantity', null, ['class'=>'form-control', 'required']) !!}

            @if ($errors->has('quantity'))
                <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('quantity') }}</strong>
                </span>
                </div>
            @endif
         </div>             
         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::number('price', null, ['class'=>'form-control',  'required']) !!}

                           
            @if ($errors->has('price'))
                 <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                 </div>
            @endif
         
         </div> 


                   <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('date', 'Date:') !!}
                {!! Form::date('date', null, ['class'=>'form-control', 'required']) !!}
            
            @if ($errors->has('date'))
              <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
                </div>
            @endif
          

         </div>

         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('sold_to', 'Buyer:') !!}
                {!! Form::text('sold_to', null, ['class'=>'form-control', 'required']) !!}


                      
            @if ($errors->has('sold_to'))
                <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sold_to') }}</strong>
                </span>
                </div>
            @endif 
            
             @if (\Session::has('error'))
                  <div class="alert alert-danger">
                  <p>{{ \Session::get('error') }}</p>
                    </div><br />
             @endif
         </div> 

           <BR><br><br>
           <BR><br><br><BR><br><br>
            <BR><br><br><br>
         <div class="form-group">
           {!! Form::submit('SUBMIT SALES', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
         {!! Form::open(['method'=>'DELETE','action'=> ['uwadminsales@destroy',$sale->id]]) !!}  
    {!! Form::submit('DELETE SALES', ['class'=>'btn red btn-block', 'onclick'=>'return confirm(\'are you sure you want to delete this import?\');']) !!}
        {!! Form::close() !!}
          </div>
        </div>
  </div>
</div>

 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@stop