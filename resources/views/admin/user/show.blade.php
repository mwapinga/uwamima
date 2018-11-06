@extends('layouts.admin')



@section('content')
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-sm-6">
            <div class="ibox">
              <div class="widgets-container">
                @if (\Session::has('success'))
               <div class="alert alert-success">
               <p>{{ \Session::get('success') }}</p>
               </div><br />
                @endif
<div class="feed-element"> <a href="#" class="pull-left"> <img height="80"   alt="User Photo" class="img-circle" src="{{ asset('assets/images/'.$user->photo->photo_tag) }}"> </a>
                  <br><br><br>
                  <div class="media-body "> <h2><strong>Name::   {{ $user->name  }} </strong> ||  User Name:: {{ $user->username }} <br></h2>
                    <small class="text-muted">Joined {{ $user->created_at->diffForHumans() }}</small>

                    <h4>Status</h4>

                    <div class="actions"> 
                    @if ($user->status)
                     <a class="btn btn-xs aqua"><i class="glyphicon glyphicon-ok"></i> Active</a>
                    @else
                    <a class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i> Not_Active</a>

                    <h4>Be Patient You will Be activated Soon </h4>

                    @endif                      
                    </div>
                  </div>
                </div>             
              </div>
            </div>
            <div class="ibox">
              <div class="widgets-container">
                <h3>Personal Details </h3>
                <table class="table small m-b-xs">
                  <tbody>
                    <tr>
                      <td><h2><strong> {{ $user->email }} </strong></h2><i>         Email</i> </td>
                      <td><h2><strong>{{ $user->phone }}</strong></h2><i>           Phone </i></td>
                    </tr>
                    <tr>
                      <td><h2><strong>{{ $user->gender == 1 ? 'Male': 'Female' }}</strong></h2><i>       Gender</i></td>
                      <td><h2><strong>{{ $user->borndate }}</strong></h2><i>      Born Date  (yy/dd/mm)</i></td>
                    </tr>
                    <tr>
                      <td><h2><strong>{{ $user->role->name }}</strong></h2><i>         Role </i></td>
                      <td><h2><strong>{{ $user->block?$user->block->name: "No Block" }}</strong></h2><i>          Block No</i> </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="ibox">
              <div class="widgets-container">
                @if ($user->photo)
                 <H3> Thanks For Using UWAMIMA DASHBOARD TRUST IS THE KEY</H3>
                  @else
                 <div class="form-group">
                {!! Form::open(['method'=>'POST','action'=> 'UserController@store','files'=>true]) !!}
                {!! Form::label('photo_id', 'Add Profile Photo Please:',['class'=>'form-control']) !!} 
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                {!! Form::submit('Add Photo', ['class'=>'btn aqua btn-block']) !!}
                {!! Form::close() !!}
                  @endif 
                 <a href="{{ URL::to('uwadminuser/' . $user->id . '/edit')}}" class="btn btn-block btn-success"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> EDIT INFO</a>
      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop