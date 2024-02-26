@extends('layouts.master')
@section('title', 'DATA Source DataTables')

@section('css')
    
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb-title')
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Incidents Response</li>
    <li class="breadcrumb-item active">Incidents</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

        <div class="col-sm-12 col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Incidents Response


                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab"
                                    href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i
                                        class="icofont icofont-ui-home"></i>Incidents</a></li>
                            <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab"
                                    href="#profile-icon" role="tab" aria-controls="profile-icon"
                                    aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Add Incidents</a></li>
                           
                        </ul>
                        <div class="tab-content" id="icon-tabContent">
                            <div class="tab-pane fade show active" id="icon-home" role="tabpanel"
                                aria-labelledby="icon-home-tab">
                               <!-- HTML (DOM) sourced data  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="data-source-1" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Owner</th>
                                        <th>Title</th>
                                        <th>Descriptions</th>
                                        <th>Importance</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>User 1</td>
                                        <td>Cashier</td>
                                        <td>Cashier Disruption</td>
                                        <td> <span class="badge rounded-pill badge-warning">Medium</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                <li class="Send Response"><a href="#"><i class="icofont icofont-ui-text-loading"></i>

                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User 2</td>
                                        <td>LMS</td>
                                        <td>LMS server down</td>
                                        <td> <span class="badge rounded-pill badge-warning">Medium</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                <li class="Send Response"><a href="#"><i class="icofont icofont-ui-text-loading"></i>

                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User 3</td>
                                        <td>Workplace</td>
                                        <td>Workplace Brownout</td>
                                        <td> <span class="badge rounded-pill badge-danger">High</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                <li class="Send Response"><a href="#"><i class="icofont icofont-ui-text-loading"></i>

                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User 4</td>
                                        <td>Connections</td>
                                        <td>No Connections</td>
                                        <td> <span class="badge rounded-pill badge-warning">Medium</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                <li class="Send Response"><a href="#"><i class="icofont icofont-ui-text-loading"></i>

                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User 5</td>
                                        <td>Connections</td>
                                        <td>Unstable Signals</td>
                                        <td> <span class="badge rounded-pill badge-success">Low</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                <li class="Send Response"><a href="#"><i class="icofont icofont-ui-text-loading"></i>
                                                
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                  
                                 
                                </tbody>
                                <tfoot>
                                    
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HTML (DOM) sourced data  Ends-->
            
                            </div>
                            <div class="tab-pane fade" id="profile-icon" role="tabpanel"
                                aria-labelledby="profile-icon-tab">
                                
                                <div class="card-body add-post">
			<form class="row needs-validation" novalidate="">
			  <div class="col-sm-12">
							
                  <label for="validationCustom01">Owner:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Title:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Descriptions:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Importance:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Impact:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">


              
			<div class="btn-showcase text-end">
			  <button class="btn btn-primary" type="submit">Add</button>
			  <input class="btn btn-light" type="reset" value="Discard">
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
                            </div>
                               
                            </div>
                            <div class="tab-pane fade" id="contact-icon" role="tabpanel"
                                aria-labelledby="contact-icon-tab">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
            
            
                   
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>

<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>

@endsection
