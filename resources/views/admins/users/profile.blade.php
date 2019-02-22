@extends('layouts.addmin')


@section('content')
 <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="#" class="pro-act">EBENEZER SEMINARY DASHBOARD USER PROFILE</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">
                            @if (Auth::user()->photo)
                            <img src="{{ asset('images/'.Auth::user()->photo->photo_tag ) }}" alt="Photo">
                           @else
                           <img src="{{ asset('images/user.jpg' ) }}" alt="No Photo">
                            @endif
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4>{{ Auth::user()->firstname  }}   {{ Auth::user()->surname }}</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4>@if (Auth::user()->photo)
                                    <img src="{{ asset('images/'.Auth::user()->photo->photo_tag ) }}" alt="Photo">
                                   @else
                                   <img src="{{ asset('images/user.jpg' ) }}" alt="No Photo">
                                    @endif My Profile</h4>
                            <div class="sdb-tabl-com sdb-pro-table">
                                <table class="responsive-table bordered">
                                    <tbody>
                                        <tr>
                                            <td>User Email</td>

                                            <td>{{ Auth::user()->email }}</td>
                                        </tr>

                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                    @if (Auth::user()->status)
                                                        <a class="btn btn-xs aqua"> Active</a>
                                                       @else
                                                       <a class="btn btn-xs btn-danger"> Not Active</a>
                                                       @endif
                                             </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="sdb-bot-edit">
                                    <a href="{{ url('user/'.Auth::user()->id.'/edit') }}" class="waves-effect waves-light btn-large sdb-btn sdb-btn-edit"><i class="fa fa-pencil"></i> Edit my profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
