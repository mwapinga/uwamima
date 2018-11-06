@extends('layouts.admin')



@section('content')


     <div class="sb2-2-3">
                   
                  <div class="btn admin-upload-btn">
                  <a href="{{ url('testimonial/create') }}"><span>Add Testimonial</span></a>
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
                                    <h4> Home Page Testimonial <span class="label label-danger">Not more than 5 Currently testimonial will be Displayed To the Website </span> </h4> 
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
													<th>Surname</th>
                                                    <th>Testamonial</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($test)
                        	@foreach($test as $index => $tests)
                        <tr>
                            <td>{{ $index+1 }}</td>
                 <td><span class="list-img"><img src="{{ asset('images/'.$tests->photo->photo_tag) }}" alt=""></span></td>
                    <td>{{ $tests->name?$tests->name:'No tags..!!' }}</td>
					<td>{{ $tests->surname?$tests->surname:'No tags..!!' }}</td>
					<td>{{ $tests->Testimonial }}</td>
                    <td>
                         @if($tests->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not ctive</span>
                                @endif
                            </td>
							<td><a href="{{ URL::to('testimonial/' . $tests->id . '/edit')}}"class="ad-st-view">Edit</a></td>
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