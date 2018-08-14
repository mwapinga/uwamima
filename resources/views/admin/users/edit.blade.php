@extends('layouts.admin')



@section('content')
  <h1>Edit Users</h1>
<div class="col-sm-3"> <img src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/300X300'}}" alt="" class="img-responsive img-rounded">
</div>




<div class="col-sm-9">
    <div class="raw">
    @include('includes.Errors')
    </div>

   {!! Form::model($user, ['method'=>'PATCH','action'=> ['AdminUsersController@update' , $user->id],'files'=>true]) !!}
   {!! Form::hidden('id', $user->id) !!}
         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
         </div>
         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
                </div> <br><br><hr>
        <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('role_id', 'Role:') !!}<br>
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

<Br ><br ><hr >
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
             <hr >
             <div class="form-group">
                {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
         </div>


         {!! Form::close() !!}

        </div>








@stop
