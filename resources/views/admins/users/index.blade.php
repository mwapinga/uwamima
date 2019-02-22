@extends('layouts.addmin')



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
                                    <h4>Home Page Blog  <span class="label label-danger">Not more than 5 Currently Post will be Displayed To the Website </span>  </h4>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Post Images</th>
                                                    <th>Header</th>
													<th>Body</th>
                                                    <th>Publisher</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($bloger)
                        	@foreach($bloger as $index => $blog)
                        <tr>
                            <td>{{ $index+1 }}</td>
                    <td><span class="list-img"><img src="{{ asset('images/'.$blog->photo->photo_tag) }}" alt=""></span></td>
                    <td>{{ $blog->header?$blog->header:'No tags..!!' }}</td>
					<td>{{ $blog->Body?$blog->Body:'No tags..!!' }}</td>
					<td>{{ $blog->user->name }}</td>
                    <td>
                         @if($blog->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not ctive</span>
                                @endif
                            </td>
							<td><a href="{{ URL::to('blog/' . $blog->id . '/edit')}}"class="ad-st-view">Edit</a></td>
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
