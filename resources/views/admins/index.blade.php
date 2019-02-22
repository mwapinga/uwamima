@extends('layouts.admin')



@section('content')


                 <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>All Frontend Pages</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Page Title</th>
                                                    <th>URL Name</th>
                                                    <th>Status</th>
                                                    <th>Live Preview</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Admission</td>
                                                    <td>http://ebenezer.joh/admision</td>
                                                    <td>
                                                    <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="{{ url('http://ebenezer.joh/About') }}" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>About Us</td>
                                                    <td>http://ebenezer.joh/About</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="{{ url('http://ebenezer.joh/About') }}" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="{{ url('http://ebenezer.joh/ababout') }} " class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Contact Us</td>
                                                    <td>http://ebenezer.joh/contact</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="{{ url('http://ebenezer.joh/contact') }}" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Our School</td>
                                                    <td>http://ebenezer.joh/our_school</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="{{ url('http://ebenezer.joh/our_school') }}" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                          
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>









                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Application Request</h4>
                                    <p>Submitted Contact Details for Application Form Request</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email id</th>
                                                    <th>Phone</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Massage </h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email id</th>
                                                    <th>Phone</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
                  


@stop