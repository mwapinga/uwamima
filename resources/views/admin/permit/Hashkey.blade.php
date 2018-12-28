@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   @if ($success)
   <div class="alert alert-success">
    <p>{{ $success }} {{ $mail }}</p>
    </div><br />
   
     @else
      <div class="col-lg-12">
        <button class="btn btn-danger" > <h2>Enter New User Email Adress</h2></button>
      </div>
          <div class="col-lg-12 top20">
          <div class="widgets-container">
          {!! Form::open(['method'=>'POST','action'=> 'PermissiontrustController@store']) !!}
        
         <div class="form-group">
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
