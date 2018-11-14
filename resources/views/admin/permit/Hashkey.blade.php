@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   @if ($success)
   <div class="alert alert-success">
    <p>{{ $success }}</p>
    </div><br />
     @endif
     @if ($confirmation_code)
     <div class="col-lg-12">
        <h2> Regristration Code </h2>
        <p>New User Should use This Code to register and will Expire after 24 Hours</p><br>
      </div>
          <div class="col-lg-12 top20">
          <div class="widgets-container">

        <hr>
        {{ $confirmation_code }}
        <hr>
   
          </div>
          </div>
     @else
      <div class="col-lg-12">
        <h2> Enter New User Email Adress</h2>
      </div>
          <div class="col-lg-12 top20">
          <div class="widgets-container">
          {!! Form::open(['method'=>'POST','action'=> 'permissionController@store']) !!}
        
         <div class="form-group col-xs-12 col-sm-5">
                {!! Form::label('email', 'New User Email:') !!}
                {!! Form::email('email', null , ['class'=>'form-control','requuired','placeholder'=>'New User Email']) !!}
             @if ($errors->has('email'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
               </div>    
            @endif
         </div>
          <br><br><br>
          <br><br>
          <div class="form-group">
           {!! Form::submit('GRANT ACCES TO NEW USER', ['class'=>'btn btn-danger']) !!}
         </div>
         {!! Form::close() !!}
           </div>
          </div>
        @endif


</div>
</div>
@stop
