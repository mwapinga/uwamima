@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">

                          <!-- begin col-3 -->
  <div class="col-md-3 col-sm-6 top10">
      <div class="widget widget-stats  box-shadow red-bg">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-folder"></i></div>
                <div class="stats-title"> MBAO ON STOCK</div>
                <div class="stats-number">22,340</div>
                <div class="stats-progress progress">
                        <div style="width:100%;" class="progress-bar"></div>
                </div>
                <div class="stats-desc">Sold Out 4302</div>
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
                  <button class="btn aqua btn-outline" type="button"><a href="{{ url('uwadminsale/create') }}"> ADD SALES</a></button>
              
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
                 <button class="btn aqua btn-outline" type="button"><a href="{{ url('uwadminimport/create') }}"> ADD IMPORT</a></button>
              
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
              
                <button class="btn aqua btn-outline" type="button"><a href="{{ url('uwadminexport/create') }}"> ADD EXPORT</a></button>
              
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





                <br><br><br><br>
  {{--               <div class="tab-pane" id="tab-2">
                  <div class="panel-body">   <!-- START list group-->
                           <div class="task-list">
                              <a href="#" class="list-group-item bt0">
                                 <span class="label label-info pull-right">just now</span>
                                 <em class="fa fa-fw fa-calendar mr"></em>Calendar updated</a>
                              <a href="#" class="list-group-item">
                                 <span class="label label-warning pull-right">4 minutes ago</span>
                                 <em class="fa fa-fw fa-comment mr"></em>Commented on a post</a>
                              <a href="#" class="list-group-item">
                                 <span class="label label-info pull-right">23 minutes ago</span>
                                 <em class="fa fa-fw fa-truck mr"></em>Order 392 shipped</a>
                              <a href="#" class="list-group-item">
                                 <span class="label label-info pull-right">46 minutes ago</span>
                                 <em class="fa fa-fw fa-money mr"></em>Invoice 653 has been paid</a>
                              <a href="#" class="list-group-item">
                                 <span class="label label-warning pull-right">1 hour ago</span>
                                 <em class="fa fa-fw fa-user mr"></em>A new user has been added</a>
                              <a href="#" class="list-group-item">
                                 <span class="label label-info pull-right">2 hours ago</span>
                                 <em class="fa fa-fw fa-check mr"></em>Completed task: "pick up dry cleaning"</a>
                              <a href="#" class="list-group-item">
                                 <span class="label label-warning pull-right">yesterday</span>
                                 <em class="fa fa-fw fa-globe mr"></em>Saved the world</a>
                              <a href="#" class="list-group-item">
                                 <span class="label label-info pull-right">two days ago</span>
                                 <em class="fa fa-fw fa-check mr"></em>Completed task: "fix error on sales page"</a>
                              <a href="#" class="list-group-item">
                                 <span class="label label-warning pull-right">two days ago</span>
                                 <em class="fa fa-fw fa-check mr"></em>Completed task: "fix error on sales page"</a>
                           </div>
                           <!-- END list group-->
                           <div class="panel-footer text-right"><a href="#" class="btn aqua btn-sm">View All Activity</a>
                           </div>
                  </div>
                </div> --}}
{{-- 
              </div>
            </div>
          </div>

<div class="col-lg-18 bottom35">
							<div class="col-lg-9">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Last Imports</h5>
										<div class="ibox-tools"> <a class="btn aqua btn-xs" href="#"> 31-Jan-2017</a> </div>
									</div>
									<div class="ibox-content collapse in">
										<div class="widgets-container">
											<div class="table table-hover">
												<table id="SalaryTable" class="display nowrap table  responsive nowrap table-bordered">
													<thead>
														<tr>
															<th>Name</th>
															<th>Position</th>
															<th>Office</th>
															<th>Age</th>
															<th>Start date</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>Name</th>
															<th>Position</th>
															<th>Office</th>
															<th>Age</th>
															<th>Start date</th>
															<th>Salary</th>
														</tr>
													</tfoot>
													<tbody>
														<tr>
															<td>Jordan Belfort</td>
															<td>System Architect</td>
															<td>London</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
														</tr>
														<tr>
															<td>Naomi Lapaglia</td>
															<td>Accountant</td>
															<td>London</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
														</tr>
														<tr>
															<td>Auckland Straight Line Host</td>
															<td>Junior Technical Author</td>
															<td>London</td>
															<td>66</td>
															<td>2009/01/12</td>
															<td>$86,000</td>
														</tr>
														<tr>
															<td>Donnie Azoff</td>
															<td>Senior Javascript Developer</td>
															<td>London</td>
															<td>22</td>
															<td>2012/03/29</td>
															<td>$433,060</td>
														</tr>
														<tr>
															<td>Mark Hanna</td>
															<td>Accountant</td>
															<td>London</td>
															<td>33</td>
															<td>2008/11/28</td>
															<td>$162,700</td>
														</tr>
														<tr>
															<td>Jean-Jacques Saurel</td>
															<td>Integration Specialist</td>
															<td>London</td>
															<td>61</td>
															<td>2012/12/02</td>
															<td>$372,000</td>
														</tr>
														<tr>
															<td>Patrick Denham</td>
															<td>Sales Assistant</td>
															<td>London</td>
															<td>59</td>
															<td>2012/08/06</td>
															<td>$137,500</td>
														</tr>
														<tr>
															<td>Teresa Petrillo</td>
															<td>Integration Specialist</td>
															<td>London</td>
															<td>55</td>
															<td>2010/10/14</td>
															<td>$327,900</td>
														</tr>
														<tr>
															<td>Brad</td>
															<td>Javascript Developer</td>
															<td>London</td>
															<td>39</td>
															<td>2009/09/15</td>
															<td>$205,500</td>
														</tr>
														<tr>
															<td>Max Belfort</td>
															<td>Software Engineer</td>
															<td>New York</td>
															<td>23</td>
															<td>2008/12/13</td>
															<td>$103,600</td>
														</tr>
														<tr>
															<td>Manny Riskin</td>
															<td>Office Manager</td>
															<td>New York</td>
															<td>30</td>
															<td>2008/12/19</td>
															<td>$90,560</td>
														</tr>
														<tr>
															<td>Aunt Emma</td>
															<td>Support Lead</td>
															<td>New York</td>
															<td>22</td>
															<td>2017/03/03</td>
															<td>$342,000</td>
														</tr>
														<tr>
															<td>Chantalle</td>
															<td>Regional Director</td>
															<td>New York</td>
															<td>36</td>
															<td>2008/10/16</td>
															<td>$470,600</td>
														</tr>
														<tr>
															<td>Nicky "Rugrat" Koskoff</td>
															<td>Senior Marketing Designer</td>
															<td>New York</td>
															<td>43</td>
															<td>2012/12/18</td>
															<td>$313,500</td>
														</tr>
														<tr>
															<td>Captain Ted Beecham</td>
															<td>Regional Director</td>
															<td>New York</td>
															<td>19</td>
															<td>2010/03/17</td>
															<td>$385,750</td>
														</tr>
														<tr>
															<td>Leah Belfort</td>
															<td>Marketing Designer</td>
															<td>New York</td>
															<td>66</td>
															<td>2012/11/27</td>
															<td>$198,500</td>
														</tr>
														<tr>
															<td>Toby Welch</td>
															<td>Chief Financial Officer (CFO)</td>
															<td>New York</td>
															<td>64</td>
															<td>2010/06/09</td>
															<td>$725,000</td>
														</tr>
														<tr>
															<td>Chester Ming</td>
															<td>Systems Administrator</td>
															<td>New York</td>
															<td>59</td>
															<td>2009/04/10</td>
															<td>$237,500</td>
														</tr>
														<tr>
															<td>Alden "Sea Otter" Kupferberg</td>
															<td>Software Engineer</td>
															<td>New York</td>
															<td>41</td>
															<td>2012/10/13</td>
															<td>$132,000</td>
														</tr>
														<tr>
															<td>Janet</td>
															<td>Personnel Lead</td>
															<td>San Francisco</td>
															<td>35</td>
															<td>2012/09/26</td>
															<td>$217,500</td>
														</tr>
														<tr>
															<td>Robbie </td>
															<td>Development Lead</td>
															<td>Singapore</td>
															<td>30</td>
															<td>2011/09/03</td>
															<td>$345,000</td>
														</tr>
														<tr>
															<td>Steve Madden</td>
															<td>Chief Marketing Officer (CMO)</td>
															<td>Edinburgh</td>
															<td>40</td>
															<td>2009/06/25</td>
															<td>$675,000</td>
														</tr>
														<tr>
															<td>Kimmie Belzer</td>
															<td>Pre-Sales Support</td>
															<td>San Francisco</td>
															<td>21</td>
															<td>2011/12/12</td>
															<td>$106,450</td>
														</tr>
														<tr>
															<td>Hildy Azoff</td>
															<td>Sales Assistant</td>
															<td>San Francisco</td>
															<td>23</td>
															<td>2010/09/20</td>
															<td>$85,600</td>
														</tr>
														<tr>
															<td>Lucas Solomon</td>
															<td>Chief Executive Officer (CEO)</td>
															<td>London</td>
															<td>47</td>
															<td>2009/10/09</td>
															<td>$1,200,000</td>
														</tr>
														<tr>
															<td>Honorary Samantha Stogel</td>
															<td>Developer</td>
															<td>Singapore</td>
															<td>42</td>
															<td>2010/12/22</td>
															<td>$92,575</td>
														</tr>
														<tr>
															<td>Nolan Drager</td>
															<td>Regional Director</td>
															<td>Edinburgh</td>
															<td>28</td>
															<td>2010/11/14</td>
															<td>$357,650</td>
														</tr>
														<tr>
															<td>Jenette Caldwell</td>
															<td>Software Engineer</td>
															<td>Tokyo</td>
															<td>28</td>
															<td>2011/06/07</td>
															<td>$206,850</td>
														</tr>
														<tr>
															<td>Jennifer Acosta</td>
															<td>Chief Operating Officer (COO)</td>
															<td>San Francisco</td>
															<td>48</td>
															<td>2010/03/11</td>
															<td>$850,000</td>
														</tr>
														<tr>
															<td>Jennifer Chang</td>
															<td>Regional Marketing</td>
															<td>London</td>
															<td>20</td>
															<td>2011/08/14</td>
															<td>$163,000</td>
														</tr>
														<tr>
															<td>Jessica E. Summerville</td>
															<td>Integration Specialist</td>
															<td>Tokyo</td>
															<td>37</td>
															<td>2011/06/02</td>
															<td>$95,400</td>
														</tr>
														<tr>
															<td>Jonas Alexander</td>
															<td>Developer</td>
															<td>Tokyo</td>
															<td>53</td>
															<td>2009/10/22</td>
															<td>$114,500</td>
														</tr>
														<tr>
															<td>Lael Greer</td>
															<td>Technical Author</td>
															<td>New York</td>
															<td>27</td>
															<td>2011/05/07</td>
															<td>$145,000</td>
														</tr>
														<tr>
															<td>Martena Mccray</td>
															<td>Team Leader</td>
															<td>London</td>
															<td>22</td>
															<td>2008/10/26</td>
															<td>$235,500</td>
														</tr>
														<tr>
															<td>Michael Bruce</td>
															<td>Post-Sales support</td>
															<td>Tokyo</td>
															<td>46</td>
															<td>2011/03/09</td>
															<td>$324,050</td>
														</tr>
														<tr>
															<td>Michael Silva</td>
															<td>Marketing Designer</td>
															<td>Singapore</td>
															<td>47</td>
															<td>2009/12/09</td>
															<td>$85,675</td>
														</tr>
														<tr>
															<td>Michelle House</td>
															<td>Office Manager</td>
															<td>San Francisco</td>
															<td>51</td>
															<td>2008/12/16</td>
															<td>$164,500</td>
														</tr>
														<tr>
															<td>Mike Loreipsum</td>
															<td>Secretary</td>
															<td>London</td>
															<td>41</td>
															<td>2010/02/12</td>
															<td>$109,850</td>
														</tr>
														<tr>
															<td>Olivia Liang</td>
															<td>Financial Controller</td>
															<td>London</td>
															<td>62</td>
															<td>2009/02/14</td>
															<td>$452,500</td>
														</tr>
														<tr>
															<td>Olivia Wenscombe</td>
															<td>Office Manager</td>
															<td>New York</td>
															<td>37</td>
															<td>2008/12/11</td>
															<td>$136,200</td>
														</tr>
														<tr>
															<td>Prescott Bartlett</td>
															<td>Director</td>
															<td>San Francisco</td>
															<td>65</td>
															<td>2008/09/26</td>
															<td>$645,750</td>
														</tr>
														<tr>
															<td>Quinn Flynn</td>
															<td>Support Engineer</td>
															<td>London</td>
															<td>64</td>
															<td>2011/02/03</td>
															<td>$234,500</td>
														</tr>
														<tr>
															<td>Rhona Davidson</td>
															<td>Software Engineer</td>
															<td>New York</td>
															<td>38</td>
															<td>2011/05/03</td>
															<td>$163,500</td>
														</tr>
														<tr>
															<td>Robert Angier</td>
															<td>Support Engineer</td>
															<td>San Francisco</td>
															<td>37</td>
															<td>2009/08/19</td>
															<td>$139,575</td>
														</tr>
														<tr>
															<td>Sakura Yamamoto</td>
															<td>Developer</td>
															<td>New York</td>
															<td>61</td>
															<td>2017/08/11</td>
															<td>$98,540</td>
														</tr>
														<tr>
															<td>Serge Baldwin</td>
															<td>Support Engineer</td>
															<td>Edinburgh</td>
															<td>47</td>
															<td>2009/07/07</td>
															<td>$87,500</td>
														</tr>
														<tr>
															<td>Shad Decker</td>
															<td>Data Coordinator</td>
															<td>London</td>
															<td>64</td>
															<td>2012/04/09</td>
															<td>$138,575</td>
														</tr>
														<tr>
															<td>Shou Itou</td>
															<td>Software Engineer</td>
															<td>New York</td>
															<td>63</td>
															<td>2010/01/04</td>
															<td>$125,250</td>
														</tr>
														<tr>
															<td>Sonya Frost</td>
															<td>Software Engineer</td>
															<td>Sidney</td>
															<td>56</td>
															<td>2012/06/01</td>
															<td>$115,000</td>
														</tr>
														<tr>
															<td>Suki Burks</td>
															<td>Junior Javascript Developer</td>
															<td>Edinburgh</td>
															<td>43</td>
															<td>2017/02/01</td>
															<td>$75,650</td>
														</tr>
														<tr>
															<td>Tatyana Fitzpatrick</td>
															<td>Sales Assistant</td>
															<td>London</td>
															<td>46</td>
															<td>2011/12/06</td>
															<td>$145,600</td>
														</tr>
														<tr>
															<td>Thor Walton</td>
															<td>Regional Director</td>
															<td>San Francisco</td>
															<td>47</td>
															<td>2011/03/21</td>
															<td>$356,250</td>
														</tr>
														<tr>
															<td>Tiger Nixon</td>
															<td>Systems Administrator</td>
															<td>San Francisco</td>
															<td>21</td>
															<td>2009/02/27</td>
															<td>$103,500</td>
														</tr>
														<tr>
															<td>Timothy Mooney</td>
															<td>Developer</td>
															<td>San Francisco</td>
															<td>30</td>
															<td>2010/07/14</td>
															<td>$86,500</td>
														</tr>
														<tr>
															<td>Unity Butler</td>
															<td>Regional Director</td>
															<td>San Francisco</td>
															<td>51</td>
															<td>2008/11/13</td>
															<td>$183,000</td>
														</tr>
														<tr>
															<td>Zenaida Frank</td>
															<td>Javascript Developer</td>
															<td>Sidney</td>
															<td>29</td>
															<td>2011/06/27</td>
															<td>$183,000</td>
														</tr>
														<tr>
															<td>Zorita Serrano</td>
															<td>Customer Support</td>
															<td>Edinburgh</td>
															<td>27</td>
															<td>2011/01/25</td>
															<td>$112,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
        @stop








