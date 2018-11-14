@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
     <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">


              <div class="ibox-title">
                <h5>Users </h5>
             </div>
             <hr>
            <a href="{{ URL::to('permission/create')}}" class="btn btn-block btn-info"><i class="glyphicon glyphicon-add" aria-hidden="true"></i>ADD NEW USER </a>
   <hr >
    @if (\Session::has('success'))
   <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
    </div><br />
     @endif
     <div class="ibox-content collapse in">
                <div class="widgets-container">
                    <table id="example7" class="display nowrap table  responsive nowrap table-bordered">
    <thead>
        <tr>
         <th>Id</th>
        {{--  <th>Photo</th> --}}
         <th>Name</th>
         <th>Username</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Gender</th>
         <th>BornDate</th>
         <th>Living Area</th>
         <th>Role</th>
         <th>Status</th>
         <th>Permission</th>
        </tr>
    </thead>
    <tbody>
    @if ($user)
    @foreach ( $user as $index => $users )
            <tr>
                <td>{{ $index + 1 }}</td>
               {{--  <td> 
                 @if ($users->photo)
                      <img height="50" src="{{ asset('assets/images/'.$users->photo->photo_tag ) }}" alt="Photo"> 
                 @else 
                  <img src="{{ asset('assets/images/user.jpg' ) }}" alt="No Photo"> 
                 @endif</td> --}}
                <td>  {{ $users->name }} </td>
                <td>{{ $users->username?$users->username: "No Username" }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->phone }}</td>
                <td>{{ $users->gender == 1 ? 'Male': 'Female' }}</td>
                <td>{{ $users->borndate }}</td>
                <td>{{ $users->adress }}</td>
                <td>{{ $users->role->name }}</td>
                <td>
                 @if ($users->status)
                     <a class="btn btn-xs aqua"><i class="glyphicon glyphicon-ok"></i> Active</a>
                    @else
                    <a class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i> Not_Active</a>
                    @endif 
                </td> 
                <td> <a href="{{ URL::to('permission/' . $users->id . '/edit')}}" class="btn btn-block btn-success"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>Edit Permission</a> </td>
            </tr>
    @endforeach
    @endif
    </tbody>
   </table>
                                    </div>
                               </div>
                         </div>
                     </div>
                  </div>
               </div>
           </div>
         </div>
@stop
