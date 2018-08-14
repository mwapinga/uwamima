@extends('layouts.admin')

@section('content')

<h1>Create Users</h1>

@include('includes.Errors')
   {!! Form::open(['method'=>'POST','action'=> 'AdminUsersController@store','files'=>true]) !!}
         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
         </div>
         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
                </div>
  <br > <br ><hr >
        <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('role_id', 'Role:') !!} <br >
                {!! Form::select('role_id', $roles, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('is_active', 'Status:') !!}

                {!! Form::select('is_active', [1=>'active',0=>'Not active'],0,['class'=>'form-control']) !!}

        </div>

        <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('photo_id','Photo:') !!}
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>
        <br >
        <br >
        <br ><hr>
                <div class="form-group col-xs-12 col-sm-3 ">
                {!! Form::label('password', 'Password:') !!}
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
                </div>

                <div class="form-group col-xs-12 col-sm-3 ">
                {!! Form::label('password_confirmation','Confirm Password:') !!}
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                </div>
                <hr>
                <div class="form-group">
                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                </div>


         {!! Form::close() !!}











@stop
