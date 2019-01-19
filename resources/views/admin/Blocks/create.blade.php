@extends('layouts.admin')


@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-6">
        <ol class="breadcrumb">
          <li class="active"> <strong> Block  Form </strong> </li>
        </ol>
      </div>
    </div>
          <div class="col-lg-5  top20">
          <div class="widgets-container">
            <h5>Fill the form Below</h5>

     {!! Form::open(['method'=>'POST','route' => 'uwablock.store']) !!}  
         <div class="form-group">
                {!! Form::label('name', 'Block Name:') !!}
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
                {!! Form::label('BlockOwner', 'Block Owner:') !!}
                {!! Form::text('BlockOwner', null , ['class'=>'form-control']) !!}
             @if ($errors->has('BlockOwner'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('BlockOwner') }}</strong>
                </span>
               </div>    
            @endif
        
            <div class="form-group">
                    {!! Form::label('Area', 'Area Meter Square:') !!}
                    {!! Form::number('Area', null, ['class'=>'form-control', 'required']) !!}

                @if ($errors->has('Area'))
                    <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('Area') }}</strong>
                    </span>
                    </div>
                @endif
             </div>
             <div class="form-group">
                    {!! Form::label('blockFee', 'Block Monthly Fee :') !!}
                    {!! Form::number('blockFee', null, ['class'=>'form-control', 'required']) !!}

                @if ($errors->has('blockFee'))
                    <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('blockFee') }}</strong>
                    </span>
                    </div>
                @endif
             </div>

         <div class="form-group">
           {!! Form::submit('SUBMIT BLOCK', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
          </div>
        </div>
  </div>
</div>

@stop