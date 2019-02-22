@extends('layouts.addmin')



@section('content')


     <div class="sb2-2-3">
            <div class="btn admin-upload-btn">
                    <a href="{{ url('event/create') }}"><span>Add Event</span></a>
                    </div>
                       <br /> <br />
                   @if (\Session::has('success'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('success') }}</p>
                                      </div><br />
                  @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Home Page Events  <span class="label label-danger">Not more than 1 Currently Events will be Displayed To the Website </span>  </h4>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Events Images</th>
                                                    <th>Name</th>
                                                    <th>Details</th>
													<th>Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($ev)
                        	@foreach($ev as $index => $event)
                        <tr>
                            <td>{{ $index+1 }}</td>
                    <td><span class="list-img"><img src="{{ asset('images/'.$event->photo->photo_tag) }}" alt=""></span></td>
                    <td>{{ $event->name?$event->name:'No tags..!!' }}</td>
					<td>{{ $event->details?$event->details:'No tags..!!' }}</td>
					<td>{{ $event->date }}</td>
                    <td>
                         @if($event->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not ctive</span>
                                @endif
                            </td>
							<td><a href="{{ URL::to('event/' . $event->id . '/edit')}}"class="ad-st-view">Edit</a></td>
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
