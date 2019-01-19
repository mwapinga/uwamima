@extends('layouts.admin')



@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> ADD SALES </h2>
        <ol class="breadcrumb">
          <li class="active"> <strong>Sales  Form </strong> </li>
        </ol>
      </div>
    </div>

          <div class="col-lg-6 top20">
          <div class="widgets-container">
            <h5>Fill the form Below</h5>
     {!! Form::open(['method'=>'POST','route'=> 'uwadminsale.store']) !!}
        
         <div class="form-group">
                {!! Form::label('name', 'Seller Name:') !!}
                {!! Form::text('name', null , ['class'=>'form-control','required']) !!}
             @if ($errors->has('name'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
               </div>    
            @endif
        
         </div>      

        <div class="form-group">
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

         <div class="form-group">
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
         <div class="form-group">
           {!! Form::submit('SUBMIT SALES', ['class'=>'btn btn-primary']) !!}
         </div>

         {!! Form::close() !!}
          </div>
        </div>
  </div>
</div>
@stop