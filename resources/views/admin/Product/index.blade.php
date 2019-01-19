@extends('layouts.admin')



@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
     <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>AVAILABLE PRODUCT IN THE MARKET</h5>
              </div>
              <BR>
              <button class="btn aqua btn-outline" type="button"><a href="{{ url('product/create') }}"> ADD PRODUCT</a></button>
                   @if (\Session::has('succesp'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('succesp') }}</p>
                                      </div><br />
                   @endif
              <div class="ibox-content collapse in">
               <div>
                 <h1> AVAILABLE PRODUCTS</h1>
                @foreach ( $prod as $index => $prods )
                  <ul>
 <h1><li>{{ $index+1 }} {{ ucfirst($prods->name) }} <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('product/'.$prods->id)}}">Edit Product,Category and Size</a> </button></li></h1>        
                 <div >
                    <table id="example7" class="display nowrap table  responsive nowrap table-bordered">
                      <thead>
                       <tr>
                      @if(!count($prods->size))
                       <th>No</th>
                       <th>Category For {{ ucfirst($prods->name) }} </th>  
                       <th>Size Available for Category</th> 
                      @elseif(count($prods->size))
                        <th>Size For Product </th>
                      @endif
                       </tr>
                      </thead>
                    <tbody>

                   @if(!count($prods->size))
                      @foreach ($prods->category as $index=> $cat)
                        <tr>
                          <td>{{ $index+1 }}</td>
                          <td>{{ ucfirst($cat->name) }}</td>
                          <td>
                         @foreach ($cat->size as $sizes)
                              <ul>
                                <li>{{ $sizes->size }} </li>
                              </ul>
                         @endforeach   
                          </td> 
                         @endforeach
                    @elseif(count($prods->size)) 
                        <td>
                          @foreach ($prods->size as $sizes)
                              <ul>
                                <li>{{ $sizes->size }} </li>
                              </ul>
                           @endforeach 
                          </td>
                   @endif
                     </tr>
                    </tbody>
                    </table>
                  </div>
                   </ul> 
                 @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div> 

    <br><br><Br><br><br>
 @stop
 
  