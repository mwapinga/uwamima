@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">

                          <!-- begin col-3 -->
  <div class="col-md-3 col-sm-6 top10">
      <div class="widget widget-stats  box-shadow red-bg">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-folder"></i></div>
                <div class="stats-title"> Block Fee</div>
                <div class="stats-number">Paid 14000</div>
                <div class="stats-progress progress">
                        <div style="width:60%;" class="progress-bar"></div>
                </div>
  <div class="stats-desc"> <h1> Debts 4302 <button type="button" class="btn blue btn-outline btn-xs"><a href="#{{-- {{ url('payout'/. Auth::User()->id ./'show') }} --}}">View My Payout Status</a> </button> </h1></div>

      </div>
  </div>
<!-- end col-3 -->
<!-- begin col-3 -->
  <div class="col-md-3 col-sm-6 mtop15 top10">
      <div class="widget widget-stats  box-shadow aqua-bg ">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-folder"></i></div>
                <div class="stats-title">MKAA ON STOCK </div>
                <div class="stats-number">45,360</div>
                <div class="stats-progress progress">
                    <div style="width:100%;" class="progress-bar"></div>
                </div>
                <div class="stats-desc">Sold Out 4320</div>
      </div>
  </div>
<!-- end col-3 -->

  <div class="col-md-3 col-sm-6 top10">
      <div class="widget widget-stats  box-shadow green-bg">
          <div class="stats-icon stats-icon-lg"><i class="fa fa-folder"></i></div>
          <div class="stats-title">NGUZO ON STOCK </div>
          <div class="stats-number">1235</div>
          <div class="stats-progress progress">
              <div style="width: 100%;" class="progress-bar"></div>
          </div>
          <div class="stats-desc">Sold Out 5430</div>
      </div>
 </div>
<!-- end col-3 -->
<div class="col-md-3 col-sm-6 mtop15 top10">
    <div class="widget widget-stats  box-shadow orange-bg">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-bell"></i></div>
        <div class="stats-title"> NEW ORDERS</div>
        <div class="stats-number">4</div>
        <div class="stats-progress progress">
            <div style="width:65%;" class="progress-bar"></div>
        </div>
        <div class="stats-desc">Processed 0</div>
    </div>
</div>
<!-- end col-3 -->

<!-- start orders-->

          <!-- tabs imports -->
          <div class="col-lg-20 top20">
            <div class="tabs-container">
              <ul class="nav nav-tabs">

<li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i><h2><span class="label label-sm label-success">MY SALES</span></h2> </a></li>
<li><a href="#tab-2" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i><h2><span class="label label-sm label-info">MY IMPORTS</span></h2></a></li>
<li><a href="#tab-3" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i><h2><span class="label label-sm label-warning">MY EXPORTS</span></h2></a></li>
              </ul>
              <div class="tab-content">
                {{--  content tab 1 --}}
                <div class="tab-pane active" id="tab-1">
                  <br>

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
                              <div class="panel-footer text-right"><a href="#" class="btn aqua btn-sm">MY SALES</a>
                           </div>

                      </div>
                    </div>
                </div>
             {{--  end tab content 1 --}}
                <div class="tab-pane " id="tab-2">
                  <br>

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
                                <div class="panel-footer text-right"><a href="#" class="btn aqua btn-sm">MY IMPORTS</a>
                           </div>

                      </div>
                    </div>
                </div>
             {{--  end tab content 1 --}}


                <div class="tab-pane " id="tab-3">
                  <br>

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
                            <div class="panel-footer text-right"><a href="#" class="btn aqua btn-sm">MY EXPORTS</a>
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








