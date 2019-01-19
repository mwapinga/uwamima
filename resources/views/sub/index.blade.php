@extends('layouts.subscriber')

@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">

            <div class="col-lg-9">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Striped Table </h5>
                                    <div class="ibox-tools">
                                        <a data-target="#demo18" data-toggle="collapse" class="collapse-link"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown"
                                            href="#"> <i class="fa fa-wrench"></i> </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#">Config option 1</a> </li>
                                            <li><a href="#">Config option 2</a> </li>
                                        </ul>
                                        <a class="close-link"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div id="demo18" class="ibox-content collapse in">
                                    <div >
                                        <div class="widgets-container">
                                            <p>Drag a event and drop into callendar.</p>
                                                              
                  <!-- Drag a event list-->
                    <div id='external-events'>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class='fc-event'>My Event 1</div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class='fc-event'>My Event 2</div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class='fc-event'>My Event 3</div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class='fc-event'>My Event 4</div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <input type='checkbox' id='drop-remove' />
                                                    <label for='drop-remove'>Remove After Drop</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="widgets-container">
                                                              
                  <!-- Full Calendar -->
                    <div id='calendar'></div>
                                            <div style='clear:both'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End calendar box -->

                            <div class="col-lg-3 top20">
                            <div class="chartdiv-container margin-bottom-10">
                                    <h4>Statistics</h4>
                                    <div class="row text-center">
                                        <div class="col-xs-4">
                                            <h3 class="desh-3-chart-text">1,507</h3>
                                            <p class="text-muted text-overflow">Total Sales</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <h3 class="desh-3-chart-text">916</h3>
                                            <p class="text-muted text-overflow" title="Open Compaign">Open Compaign</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <h3 class="desh-3-chart-text">22</h3>
                                            <p class="text-muted text-overflow">Daily Sales</p>
                                        </div>
                                    </div>
                                        <div id="hero-bar" class="demo-placeholder"></div>
                                    </div>
                            </div>
                             <div class="col-lg-3 top20">
                            <div class="chartdiv-container margin-bottom-10">
                                    <h4>Daily Sales </h4>
                                    <div class="row text-center">
                                        <div class="col-xs-6">
                                            <h3 class="desh-3-chart-text">8,459</h3>
                                            <p class="text-muted text-overflow">Total Sales</p>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3 class="desh-3-chart-text">584</h3>
                                            <p class="text-muted text-overflow">Open Compaign</p>
                                        </div>
                                    </div>
                                        <div id="hero-donut" class="demo-placeholder"></div>
                                    </div> </div>
 
          <div class="wrapper-content ">
            <div class="row">
          <div class="col-lg-20">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5> NEW ORDERS </h5>
              </div>
              <!-- / ibox-title -->
              <div id="demo2" class="ibox-content collapse in">
                <div class="borderedTable">
                  <div class="table-scrollable">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> First Name </th>
                          <th> Last Name </th>
                          <th> Email </th>
                          <th> Order No </th>
                          <th> Status </th>
                          <th> View Order </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> Mark </td>
                          <td> Otto </td>
                          <td> makr124@gmail.com </td>
                          <td>#433384001</td>
                           <td><span class="label label-sm label-danger"> Unprocessed </span> </td>
                           <td>
                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminorder/show')}}"> View Order</a> </button>
                            </td>

                        </tr>
                        <tr>
                          <td>2</td>
                          <td> Jacob </td>
                          <td> Nilson </td>
                          <td> jac123@gmail.com </td>
                          <td>#433384001</td>
                         <td><span class="label label-sm label-danger"> Unprocessed </span> </td>
                         <td>
                    <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminorder/show')}}"> View Order</a> </button>
                      </td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td> Larry </td>
                          <td> Cooper </td>
                          <td> lar@gmail.com </td>
                          <td>#433384001</td>
                          <td><span class="label label-sm label-danger"> Unprocessed </span> </td>
                          <td>
                        <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminorder/show')}}"> View Order</a> </button>
                          </td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td> Sandy </td>
                          <td> Lim </td>
                          <td> sanlim@gmail.com </td>
                          <td>#433384001</td>
                          <td><span class="label label-sm label-danger"> Unprocessed </span> </td>
                          <td>
                        <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminorder/show')}}"> View Order</a> </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                      <div class="panel-footer text-right"><a href="{{ URL::to('uwadminorder') }}" class="btn aqua btn-sm">View All Order</a>
                           </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


           {{--  end orders --}}

          <!-- tabs imports -->
          <div class="col-lg-20 top20">
            <div class="tabs-container">
              <ul class="nav nav-tabs">
<li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i><h2><span class="label label-sm label-success">LATEST SALES</span></h2> </a></li>
<li><a href="#tab-2" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i><h2><span class="label label-sm label-info">LATEST IMPORTS</span></h2></a></li>
<li><a href="#tab-3" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i><h2><span class="label label-sm label-warning">LATEST EXPORTS</span></h2></a></li>
              </ul>
              <div class="tab-content">
                {{--  content tab 1 --}}
                <div class="tab-pane active" id="tab-1">
                  <br>
                  <button class="btn aqua btn-outline" type="button"><a href="{{ url('/sale') }}"> ADD SALES</a></button>

                <div class="panel-body">
                  <div class="table-responsive">
                              <table class="table table-bordered table-hover bottom0 ">
                                 <thead>
                                    <tr>
                                       <th>Owner</th>
                                       <th>Block</th>
                                       <th>Product</th>
                                       <th>Type</th>
                                       <th>Date</th>
                                       <th>Amount</th>
                                       <th>Car T No.</th>
                                       <th>Drvier Name</th>
                                       <th>In Time</th>
                                       <th>Out Time</th>
                                       <th>Edit Option</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Ismail mkombwe</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                        <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminsale/edit')}}"> Edit Sale</a> </button>
                                            </td>
                                    </tr>
                                     <tr>
                                       <td>Ismail mkombwe</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                       <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminsale/edit')}}"> Edit Sale</a> </button>
                                            </td>
                                    </tr>
                                     <tr>
                                       <td>Ismail mkombwe</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                       <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminsale/edit')}}"> Edit Sale</a> </button>
                                            </td>
                                    </tr>

                                 </tbody>
                              </table>
                              <div class="panel-footer text-right"><a href="{{ URL::to('uwadminsale') }}" class="btn aqua btn-sm">View All Sales</a>
                           </div>

                      </div>
                    </div>
                </div>
             {{--  end tab content 1 --}}
                <div class="tab-pane " id="tab-2">
                  <br>
                 <button class="btn aqua btn-outline" type="button"><a href="{{ url('addmore/create') }}"> ADD IMPORT</a></button>

                <div class="panel-body">
                  <div class="table-responsive">
                              <table class="table table-bordered table-hover bottom0 ">
                                 <thead>
                                    <tr>
                                       <th>Owner</th>
                                       <th>Block</th>
                                       <th>Product</th>
                                       <th>Type</th>
                                       <th>Date</th>
                                       <th>Amount</th>
                                       <th>Car T No.</th>
                                       <th>Drvier Name</th>
                                       <th>In Time</th>
                                       <th>Out Time</th>
                                       <th>Edit Option</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Juma Mtanga</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                        <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminimport/edit')}}"> Edit Import</a> </button>
                                            </td>
                                    </tr>
                                     <tr>
                                       <td>juma mtanga</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                        <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminimport/edit')}}"> Edit Import</a> </button>
                                            </td>
                                    </tr>
                                     <tr>
                                       <td>juma mtanga</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                       <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminimport/edit')}}"> Edit Import</a> </button>
                                            </td>
                                    </tr>

                                 </tbody>
                              </table>
                                <div class="panel-footer text-right"><a href="{{ URL::to('uwadminimport') }}" class="btn aqua btn-sm">View All Imports</a>
                           </div>

                      </div>
                    </div>
                </div>
             {{--  end tab content 1 --}}


                <div class="tab-pane " id="tab-3">
                  <br>

                <button class="btn aqua btn-outline" type="button"><a href="{{ url('/addmore') }}"> ADD EXPORT</a></button>

                <div class="panel-body">
                  <div class="table-responsive">
                              <table class="table table-bordered table-hover bottom0 ">
                                 <thead>
                                    <tr>
                                       <th>Owner</th>
                                       <th>Block</th>
                                       <th>Product</th>
                                       <th>Type</th>
                                       <th>Date</th>
                                       <th>Amount</th>
                                       <th>Car T No.</th>
                                       <th>Drvier Name</th>
                                       <th>In Time</th>
                                       <th>Out Time</th>
                                       <th>Edit Option</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Ismail mkombwe</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                        <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminexport/edit')}}"> Edit Export</a> </button>
                                            </td>
                                    </tr>
                                     <tr>
                                       <td>Ismail mkombwe</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                       <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminexport/edit')}}"> Edit Export</a> </button>
                                            </td>
                                    </tr>
                                     <tr>
                                       <td>Ismail mkombwe</td>
                                       <td>Block B23</td>
                                       <td>Timber</td>
                                       <td>2x3</td>
                                       <td>10/02/2018</td>
                                       <td>400</td>
                                       <td>T345 ADY</td>
                                       <td>John Limo</td>
                                       <td>12:00</td>
                                       <td>13:00</td>
                                       <td>
                                          <button type="button" class="btn blue btn-outline btn-xs"><a href="{{ URL::to('uwadminexport/edit')}}"> Edit Export</a> </button>
                                            </td>
                                    </tr>

                                 </tbody>
                              </table>
                            <div class="panel-footer text-right"><a href="{{ url('uwadminexport') }}" class="btn aqua btn-sm">View All Exports</a>
                           </div>
                      </div>
                    </div>
                </div>
             {{--  end tab content 3--}}


            </div>
           </div>
         </div>
        {{--  ends tabs Imports and exports and sales --}}
  </div>
</div>





      <br><br ><br><Br><Br><br>
        @stop








