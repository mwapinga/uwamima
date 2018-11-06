@extends('layouts.admin')



@section('content')

         @if (\Session::has('success'))
                   <div class="alert alert-success">
                  <p>{{ \Session::get('success') }}</p>
                  </div><br />
                  @endif

        <div class="sb2-2-add-blog sb2-2-1">
                    <h2>About Us Page </h2>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>About Us Page Currently Information</h4>
                                </div>
                                <div class="bor">
                                    @if($ab)
                                    @foreach( $ab as $abs)
                                        <p>{{ $abs->about }}</p>
                                 @if($abs->status)
                                <span class="label label-success">The page is Active </span>
                                @else
                                <span class="label label-danger"> The Page Is Not ctive </span>
                                @endif
                                <br><br><br >
                       <button type="button" class="btn btn-success col-sm-6"><a href="{{ URL::to('ababout/' . $abs->id . '/edit')}}">Edit About Us Page</a></button>

                                 @endforeach
                                @else
                                  <h1><span class="label label-danger">Ooops The About Page Does Not Anything For Now</span></h1>
                                  <h1> <span class="label label-danger">Please Click Edit to Add The School Information  Please</span></h1>
                                @endif
                                </div>
                            </div>
                        </div>
                       </div>
                        </div>
                        </div>


@stop