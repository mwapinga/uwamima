@extends('layouts.addmin')



@section('content')


     <div class="sb2-2-3">


                   @if (\Session::has('success'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('success') }}</p>
                                      </div><br />
                  @endif

                  <div class="btn admin-upload-btn">
                  <a href="{{ url('rep/create') }}"><span>Add Report</span></a>
                  </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Home Page Org Report  </h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>File</th>
                                                    <th>Description</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($rep)
                        	@foreach($rep as $index => $reps)
                        <tr>
                         <td>{{ $index+1 }}</td>
                    <td>{{ $reps->photo->photo_tag }}</td>
                    <td>{{ $reps->name }}</td>
                    <td>
                         @if($reps->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not ctive</span>
                                @endif
                            </td>
							<td><a href="{{ URL::to('rep/' . $reps->id . '/edit')}}"class="ad-st-view">Edit</a></td>
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





@stop
