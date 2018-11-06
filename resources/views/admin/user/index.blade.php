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
         <th>Photo</th>
         <th>Name</th>
         <th>Username</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Gender</th>
         <th>BornDate</th>
         <th>Living Area</th>
         <th>Role</th>
         <th>Status</th>
         <th>created</th>
         <th>updated</th>
         <th>Profile</th>
        </tr>
    </thead>
    <tbody>
    @if ($user)
    @foreach ( $user as $index => $users )
            <tr>
                <td>{{ $index + 1 }}</td>
                @if($users->photo)
                <td><img height="50" src="{{ asset('assets/images/'.$users->photo->photo_tag) }}" alt="User photo"></td>
                @else
                <td>No Photo</td>
                @endif
                <td> <a href="{{ URL::to('/admin/user/' . $users->id . '/edit')}}"> {{ $users->name }}</a> </td>
                <td>{{ $users->username?$users->username: "No Username" }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->phone }}</td>
                <td>{{ $users->gender == 1 ? 'Male': 'Female' }}</td>
                <td>{{ $users->borndate }}</td>
                <td>{{ $users->adress }}</td>
                <td>{{ $users->role->name }}</td>
                <td>{{ $users->status == 1 ? 'Active': 'Not Active' }}</td>
                <td>{{ $users->created_at->diffForHumans() }}</td>
                <td>{{ $users->updated_at->diffForHumans()  }}</td>
                <td> 
                     {!! Form::open(['method'=>'DELETE','action'=> ['UserController@destroy',$users->id]]) !!}  
                     {!! Form::submit('DELETE USER', ['class'=>'btn red btn','glyphicon glyphicon-delete']) !!}
                     {!! Form::close() !!}
                </td>
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
