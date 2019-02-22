@extends('layouts.addmin')



@section('content')


     <div class="sb2-2-3">
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
                                    <h4>Home Page Chair Message  </h4>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>photo</th>
                                                     <th>Name</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($ChairM)
                        	@foreach($ChairM as $index => $chair)
                        <tr>
                            <td>{{ $index+1 }}</td>
                    <td><span class="list-img"><img src="{{ asset('asset/images/'.$chair->photo->photo_tag) }}" alt=""></span></td>
                    <td>{{ ucfirst($chair->name) }}</td>
					<td>{{ $chair->massage}}</td>
                    <td>
                    <td>
                        <div class="btn admin-upload-btn">
                        <a href="{{ URL::to('chairm/' . $chair->id . '/edit')}}"> <span>Update</span></a> 
                        </div>
                  </td>
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
