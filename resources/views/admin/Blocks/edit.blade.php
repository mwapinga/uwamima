@extends('layouts.admin')



@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> EDIT BLOCK </h2>
        <ol class="breadcrumb">
          <li class="active"> <strong>Edit Block  Form </strong> </li>
        </ol>
      </div>
    </div>

          <div class="col-lg-5 top20">
          <div class="widgets-container">
            <h5>Fill the form Below</h5>

         {!! Form::model($block, ['method'=>'PATCH','action'=> ['BlockController@update' , $block->id ]]) !!}
             {!! Form::hidden('id', $block->id) !!}
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
           {!! Form::submit('EDIT BLOCK', ['class'=>'btn btn-primary']) !!}
         </div>

         <button class="btn aqua btn-outline" type="button"><a href="{{ url('blockowner/'.$block->id.'/edit') }}">MANAGE BLOCK OWNER</a></button>
         {!! Form::close() !!}
         {!! Form::open(['method'=>'DELETE','action'=> ['BlockController@destroy',$block->id]]) !!}  
        {!! Form::submit('DELETE BLOCK', ['class'=>'btn red btn-block', 'onclick'=>'return confirm(\'are you sure you want to delete this block?\');']) !!}
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