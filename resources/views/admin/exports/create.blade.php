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

          <div class="col-lg-6 top20">
          <div class="widgets-container">
            <h5>Fill the form Below</h5>
     {!! Form::open(['method'=>'POST','route'=> 'uwadminexport.store']) !!}
       <div class="form-group">
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
         <div class="form-group">
            {!! Form::label('farmname', 'Farmer Name:') !!}
            {!! Form::text('farmname', null , ['class'=>'form-control']) !!}
         @if ($errors->has('farmname'))
           <div class="alert alert-danger" >
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('farmname') }}</strong>
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

         <div class="form-group">
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

          <div class="form-group">
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

          <div class="form-group">
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

         <div class="form-group">
           {!! Form::submit('SUBMIT IMPORT', ['class'=>'btn btn-primary']) !!}
         </div>

         {!! Form::close() !!}
          </div>
        </div>
  </div>
</div>
@stop
