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
                                    <h4>Manage Comments </h4>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Post</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Comments</th>
                                                    <th>Status</th>
                                                
													{{-- <th>Enable</th>
                                                  
                                                    <th>Delete</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>

                        	@if($comm)
                        	@foreach($comm as $index => $staf)
                        <tr>
                            <td>{{ $index+1 }}</td>
                    <td>
                    @php 
                    $post = \App\model\admin\blog::where('id',$staf->blog_id)->get()->first();
                    @endphp
                     {{ str_limit($post->header,24) }}
                    </td>
					<td>{{ $staf->name?$staf->name:'Anonymous' }}</td>
                    <td>{{ $staf->email?$staf->email:'No email' }}</td>
					<td>{{ $staf->comment }}</td>
                    <td>
                         @if($staf->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not ctive</span>
                                @endif
                            </td>
                    @if(!$staf->status)
                    <td>
                        <div class="btn admin-upload-btn">
                    <a href="{{ url('commentz/' . $staf->id . '/edit') }}"><span>Enable </span></a>
                    </div>
                     </td>
                     @endif
                     <td>
            {!! Form::open(['method'=>'DELETE','route'=> ['commentz.destroy',$staf->id]]) !!}  
          {!! Form::submit('Delete', ['class'=>'btn red btn', 'onclick'=>'return confirm(\'are you sure you want to delete this comment?\');']) !!}
               {!! Form::close() !!}
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
