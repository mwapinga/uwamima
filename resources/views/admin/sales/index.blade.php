@extends('layouts.admin')



@section('content')


     <div class="sb2-2-3">

                  <div class="btn admin-upload-btn">
                  <a href="{{ url('portfolio/create') }}"><span>Add Portfolio</span></a>
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
                                    <h4>Home Page Portfolio  <span class="label label-danger">Not more than 8 Currently Photo will be Displayed To the Website </span>  </h4>
                                      
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Post Images</th>
                                                    <th>name</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($port)
                        	@foreach($port as $index => $portf)
                        <tr>
                            <td>{{ $index+1 }}</td>
                    <td><span class="list-img"><img src="{{ asset('images/'.$portf->photo->photo_tag) }}" alt=""></span></td>
                    <td>{{ $portf->name?$portf->name:'No tags..!!' }}</td>
                    <td>
                         @if($portf->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not ctive</span>
                                @endif
                            </td>
							<td><a href="{{ URL::to('portfolio/' . $portf->id . '/edit')}}"class="ad-st-view">Edit</a></td>
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