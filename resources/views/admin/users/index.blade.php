@extends('layouts.admin')


use App\Photo;
use App\User;
@section('content')

   <h1>Users </h1>
   <hr >
   <table class="table">
    <thead>
        <tr>
         <th>Id</th>
         <th>Photo</th>
         <th>Name</th>
         <th>Email</th>
         <th>Role</th>
         <th>Status</th>
         <th>created</th>
         <th>updated</th>
        </tr>
    </thead>
    <tbody>
    @if ($user)
    @foreach ( $user as $users )
            <tr>
                <td>{{ $users->id }}</td>
                <td><img height="80" src="{{ $users->photo?$users->photo->file:'http://placehold.it/400X400' }}" alt=""></td>

               <td> <a href="{{ URL::to('/admin/user/' . $users->id . '/edit')}}"> {{ $users->name }}</a> </td>

                <td>{{ $users->email }}</td>
                <td>{{ $users->role->name }}</td>
                <td>{{ $users->is_active == 1 ? 'Active': 'Not Active' }}</td>
                <td>{{ $users->created_at->diffForHumans() }}</td>
                <td>{{ $users->updated_at->diffForHumans()  }}</td>
            </tr>
    @endforeach
    @endif
    </tbody
   </table>


@stop
