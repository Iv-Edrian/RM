@extends('layouts.master')
@section('title', 'Base Inputs',)

@section('css')
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/jsgrid.css')}}">

@endsection

@section('breadcrumb-title')
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Plans and Assesements</li>
<li class="breadcrumb-item active">Risk Plans and Assesements</li>
@endsection

@section('content')
<div class="col-sm-12 col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Risk Plans And Assesements</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab"
                                    href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i
                                        class="icofont icofont-ui-home"></i>Lists</a></li>
                            <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab"
                                    href="#profile-icon" role="tab" aria-controls="profile-icon"
                                    aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Add</a></li>
                            <li class="nav-item"><a class="nav-link" id="contact-icon-tab" data-bs-toggle="tab"
                                    href="#contact-icon" role="tab" aria-controls="contact-icon"
                                    aria-selected="false"><i class="icofont icofont-contacts"></i>Activated Plans</a></li>
                        </ul>

                            <!----------------------------------------------------------------------->
                        <div class="tab-content" id="icon-tabContent">
                            <div class="tab-pane fade show active" id="icon-home" role="tabpanel"
                                aria-labelledby="icon-home-tab">
                                <div class="col-sm-20">
				<div class="card-body">
					<div id="basicScenario"></div>
                </div>
                            </div>
                            </div>
                            <!----------------------------------------------------------------------->
                            <div class="tab-pane fade" id="profile-icon" role="tabpanel"
                                aria-labelledby="profile-icon-tab">
                                <div class="card">
                        <div class="card-body add-post">
    <form class="row needs-validation" novalidate="">
      <div class="col-sm-12">
                    
          <label for="validationCustom01">Owner:</label>
          <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

          <label for="validationCustom01">Template No:</label>
          <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

          <label for="validationCustom01">Risks:</label>
          <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

          <label for="validationCustom01">Impact:</label>
          <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

          <label for="validationCustom01">Plans:</label>
          <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

          <label for="validationCustom01">Team/Personnel Responsible:</label>
          <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

      
    <div class="btn-showcase text-end">
      <button class="btn btn-primary" type="submit">Post</button>
      <input class="btn btn-light" type="reset" value="Discard">
    </div>
    </div>
                    </div>
                </div>
            </div>
<!----------------------------------------------------------------------->
                            <div class="tab-pane fade" id="contact-icon" role="tabpanel"
                                aria-labelledby="contact-icon-tab">
                                <div class="container-fluid basic_table">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="border-bottom-primary">
                          <th scope="col">Template No.</th>
                          <th scope="col">Plans </th>
                          <th scope="col">Date Activated</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-bottom-secondary">
                          <td>1</td>
                          <td class="action"> <a class="pdf" href="sample.pdf') }}" target="_blank"><i
                                                    class="icofont icofont-file-pdf"></i></a></td>
                          <td>Feb 1, 2024</td>
                   
                        </tr>
							
                            </tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>

                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('script')
<script src="{{asset('assets/js/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/griddata.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/jsgrid.js')}}"></script>

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