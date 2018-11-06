@extends('layouts.admin')



@section('content')


     <div class="sb2-2-3">
                   @if (\Session::has('success'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('success') }}</p>
                                      </div><br />
                  @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Home Page Staffs  <span class="label label-danger">Not more than 5 Currently Staffs people will be Displayed To the Website </span>  </h4>
                                      
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>staff Images</th>
                                                    <th>First name</th>
                                                    <th>Second Name</th>
													<th>Post</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($sta)
                        	@foreach($sta as $index => $staf)
                        <tr>
                            <td>{{ $index+1 }}</td>
                    <td><span class="list-img"><img src="{{ asset('images/'.$staf->photo->photo_tag) }}" alt=""></span></td>
                    <td>{{ $staf->name?$staf->name:'No tags..!!' }}</td>
					<td>{{ $staf->surname?$staf->surname:'No tags..!!' }}</td>
					<td>{{ $staf->post }}</td>
                    <td>
                         @if($staf->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not ctive</span>
                                @endif
                            </td>
							<td><a href="{{ URL::to('staff/' . $staf->id . '/edit')}}"class="ad-st-view">Edit</a></td>
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