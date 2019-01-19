@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
    <div class="wrapper-content ">
        <div class="row">
      <div class="col-lg-20">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h3> MANAGE USER IN {{ ucfirst($blck->name) }}</h3>
          </div>
          <!-- / ibox-title -->
          <div id="demo2" class="ibox-content collapse in">
            <div class="borderedTable">
              <div class="table-scrollable">
                 @if (\Session::has('success'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('success') }}</p>
                                      </div><br />
                  @endif
                   @if (\Session::has('fail'))
                                       <div class="alert alert-danger">
                                      <p>{{ \Session::get('fail') }}</p>
                                      </div><br />
                  @endif
                <div>
                    <h5>Available User to {{ ucfirst($blck->name) }}</h5>
                </div>
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Block Owner </th>
                      <th> REMOVE USER </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($blck->users as $index => $user)
                      <tr>
                        <td>{{ $index + 1 }}</td>
                         <td> {{ $user->name }} </td> 
                       <td>
            {!! Form::open(['method'=>'DELETE','route'=> ['blockowner.store',$user->id]]) !!}
            {!! Form::hidden('blockId', $blck->id) !!}
            {!! Form::submit('REMOVE OWNER', ['class'=>'btn  btn-danger' ,  'onclick'=>'return confirm(\'are you sure you want to Remove this user?\')' ]) !!}
            {!! Form::close() !!}   
                        </td>
                      </tr>
                      @endforeach   
                  </tbody>
                </table>
            <a href="{{ url('uwablock') }}" class="btn btn-block btn-success" ><i class="glyphicon glyphicon-add" aria-hidden="true"></i> FINISH MANAGERIAL </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 


            <div class="col-lg-5 top20">
               <ol class="breadcrumb">
            <li class="active"> <strong>Add New  Owner To {{ $blck->name }} </strong> </li>
              </ol>
            <div class="widgets-container">

    {!! Form::open(['method'=>'POST','route'=> 'blockowner.store']) !!}
              
              {!! Form::hidden('blockId', $blck->id) !!}
              <div class="form-group">
                    {!! Form::label('name', 'Block Owner Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'required']) !!}
                @if ($errors->has('name'))
                    <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    </div>
                @endif
             </div>
             <br>
              {!! Form::submit('ASSIGN NEW OWNER', ['class'=>'btn btn-primary']) !!}</td>
            {!! Form::close() !!}
     </div>
     </div>


</div>
</div>

@stop
