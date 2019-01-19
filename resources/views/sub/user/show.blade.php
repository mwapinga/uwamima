@extends('layouts.subscriber')



@section('content')
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-sm-10">
            <div class="ibox">
              <div class="widgets-container">
                @if (\Session::has('success'))
               <div class="alert alert-success">
               <p>{{ \Session::get('success') }}</p>
               </div><br />
                @endif
                <div class="feed-element"> <a href="#" class="pull-left"> 
                         @if (Auth::user()->photo)
                              <img src="{{ asset('assets/images/'.Auth::user()->photo->photo_tag ) }}" alt="Photo"> 
                         @else 
                          <img src="{{ asset('assets/images/user.jpg' ) }}" alt="No Photo"> 
                         @endif
                   </a>
                  <br><br><br>
                  <div class="media-body "> <h2><strong>Name::   {{ Auth::user()->name  }} </strong> ||  User Name:: {{ Auth::user()->username }} <br></h2>
                    <small class="text-muted">Joined {{ Auth::user()->created_at->diffForHumans() }}</small>

                    <h4>Status</h4>

                    <div class="actions"> 
                    @if (Auth::user()->status)
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
                      <td><h2><strong> {{ Auth::user()->email }} </strong></h2><i>         Email</i> </td>
                      <td><h2><strong>{{ Auth::user()->phone }}</strong></h2><i>           Phone </i></td>
                    </tr>
                    <tr>
                      <td><h2><strong>{{ Auth::user()->gender == 1 ? 'Male': 'Female' }}</strong></h2><i>       Gender</i></td>
                      <td><h2><strong>{{ Auth::user()->borndate }}</strong></h2><i>      Born Date  (yy/dd/mm)</i></td>
                    </tr>
                    <tr>
                      <td><h2><strong> 

                       @foreach (Auth::user()->roles as $role)
                        {{ $role->display_name }}  <br />
                    @endforeach 

                     </strong></h2><i>         Role </i></td>
                      <td><h2><strong>

                         @if(Auth::user()->blocks )
                         @foreach (Auth::user()->blocks as $element)
                           {{ $element->name }} ,
                         @endforeach
                         @else
                         No Block
                         @endif

                 </strong></h2><i>          Block No</i> </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="ibox">
              <div class="widgets-container">
                @if (Auth::user()->photo)
                 <H3> Thanks For Using UWAMIMA DASHBOARD TRUST IS THE KEY</H3>
                  @else
                 <div class="form-group">
                {!! Form::open(['method'=>'POST','route'=> 'profile.user.edit','files'=>true]) !!}
                {!! Form::label('photo_id', 'Add Profile Photo Please:',['class'=>'form-control']) !!} 
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                {!! Form::submit('Add Photo', ['class'=>'btn aqua btn-block']) !!}
                {!! Form::close() !!}
                  @endif 
                 <a href="{{ URL::to('profedit')}}" class="btn btn-block btn-success"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> EDIT INFO</a>
      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop