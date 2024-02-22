@extends('layouts.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">Base Inputs</li>
@endsection

@section('content')
<div class="col-sm-12 col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Business Continuity Plans</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab"
                                    href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i
                                        class="icofont icofont-ui-home"></i>My BCP</a></li>
                            <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab"
                                    href="#profile-icon" role="tab" aria-controls="profile-icon"
                                    aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Add BCP</a></li>
                        </ul>

                        <div class="tab-content" id="icon-tabContent">
                            <div class="tab-pane fade show active" id="icon-home" role="tabpanel"
                                aria-labelledby="icon-home-tab">							

                            </div>

                            <div class="tab-pane fade" id="profile-icon" role="tabpanel"
                                aria-labelledby="profile-icon-tab">
								<div class="card">
		                     
                                <div class="card-body add-post">
			<form class="row needs-validation" novalidate="">
			  <div class="col-sm-12">
							
                  <label for="validationCustom01">BIA Title:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Owner:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Descriptions:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Importance:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Impact:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

                  <label for="validationCustom01">Recovery Timne Object (RTO):</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="" required="">

              
			<div class="btn-showcase text-end">
			  <button class="btn btn-primary" type="submit">Post</button>
			  <input class="btn btn-light" type="reset" value="Discard">
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
@endsection