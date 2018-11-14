@extends('layouts.admin')



@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> ADD EXPORT </h2>
        <ol class="breadcrumb">
          <li class="active"> <strong>Export  Form </strong> </li>
        </ol>
      </div>
    </div>

          <div class="col-lg-12 top20">
          <div class="widgets-container">
            <h5>Fill the form Below</h5>
     {!! Form::open(['method'=>'POST','action'=> 'ExportController@store']) !!}
        
         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('name', 'Owner Name:') !!}
                {!! Form::text('name', null , ['class'=>'form-control', 'required']) !!}
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

         <div class="form-group col-xs-12 col-sm-3">
         <label>Category Name</label>
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
                {!! Form::label('drivername', 'Driver Name:') !!}
                {!! Form::text('drivername', null, ['class'=>'form-control' ,'required', 'placeholder'=>'Fist and Second Name']) !!}

                           
            @if ($errors->has('drivername'))
                 <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('drivername') }}</strong>
                </span>
                 </div>
            @endif
         
         </div> 

         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('carnumber', 'Car Number:') !!}
                {!! Form::text('carnumber', null, ['class'=>'form-control' ,'required']) !!}


                      
            @if ($errors->has('carnumber'))
                <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('carnumber') }}</strong>
                </span>
                </div>
            @endif 
         </div> 
 
          <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('intime', 'In Time:') !!}
                {!! Form::time('intime', null, ['class'=>'form-control' ,'required']) !!}

                           
            @if ($errors->has('intime'))
                <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('intime') }}</strong>
                </span>
                 </div>
            @endif
         
         </div>

          <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('outime', 'Out Time:') !!}
                {!! Form::time('outime', null, ['class'=>'form-control' ,'required']) !!}

        
                           
            @if ($errors->has('outime'))
                 <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('outime') }}</strong>
                </span>
                 </div>
            @endif         
         </div>
           <BR><br><br>
           <BR><br><br><BR><br><br>
           <BR><br><BR><br><br><BR><br><br><BR><br><br><BR><br><br>
         <div class="form-group">
           {!! Form::submit('SUBMIT IMPORT', ['class'=>'btn btn-primary']) !!}
         </div>

         {!! Form::close() !!}
          </div>
        </div>
  </div>
</div>
@stop