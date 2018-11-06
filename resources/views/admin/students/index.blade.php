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
                                    <h4>Home Page Best Students  <span class="label label-danger">Not more than 3 students  will be Displayed To the Website </span>  </h4>
                                      
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>name</th>
                                                    <th>surname</th>
													<th>Region rank</th>
                                                    <th>Distric Rank</th>
                                                    <th>Year</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($bs)
                        	@foreach($bs as $index => $bsd)
                        <tr>
                            <td>{{ $index+1 }}</td>
                    <td><span class="list-img"><img src="{{ asset('images/'.$bsd->photo->photo_tag) }}" alt=""></span></td>
                    <td>{{ $bsd->name?$bsd->name:'No tags..!!' }}</td>
					<td>{{ $bsd->surname?$bsd->surname:'No tags..!!' }}</td>
					<td>{{ $bsd->Reglvl}}</td>
                    <td>{{ $bsd->Natlvl}}</td>
                    <td>{{ $bsd->year}}</td>
                    <td>
                         @if($bsd->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not ctive</span>
                                @endif
                            </td>
							<td><a href="{{ URL::to('beststudent/' . $bsd->id . '/edit')}}"class="ad-st-view">Edit</a></td>
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