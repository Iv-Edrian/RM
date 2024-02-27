@extends('layouts.master')
@section('title', 'Add Post')

@section('css')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('breadcrumb-title')
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Blog</li>
<li class="breadcrumb-item active">Add Post</li>
@endsection

@section('content')

<div class="col-sm-12 col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Disaster Recovery (in ETL process)</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab"
                                    href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i
                                        class="icofont icofont-ui-home"></i>Extract</a></li>
                            <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab"
                                    href="#profile-icon" role="tab" aria-controls="profile-icon"
                                    aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Transform</a></li>
                            <li class="nav-item"><a class="nav-link" id="contact-icon-tab" data-bs-toggle="tab"
                                    href="#contact-icon" role="tab" aria-controls="contact-icon"
                                    aria-selected="false"><i class="icofont icofont-contacts"></i>Load</a></li>
                        </ul>
                        <div class="tab-content" id="icon-tabContent">
                            <div class="tab-pane fade show active" id="icon-home" role="tabpanel"
                                aria-labelledby="icon-home-tab">
                                <div class="container-fluid">
	<div class="row">
	  <div class="col-sm-12">
		<div class="card">
		  <div class="card-header">
			<h5>Add Disaster Recovery</h5>
		  </div>
		  <div class="card-body add-post">
			<form class="row needs-validation" novalidate="">
			  <div class="col-sm-12">
				<div class="mb-3">
				  <label for="validationCustom01">Title:</label>
				  <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title" required="">
				  <div class="valid-feedback">Looks good!</div>
				</div>
				
				<div class="email-wrapper">
				  <div class="theme-form">
					<div class="mb-3">
					  <label>Content:</label>
					  <textarea id="text-box" name="text-box" cols="10" rows="2"></textarea>
					</div>
				  </div>
				</div>
			  </div>
			</form>
			<form class="dropzone" id="singleFileUpload" action="/upload.php">
			  <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
				<h6 class="mb-0">Drop files here or click to upload.</h6>
			  </div>
			</form>
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
                            <div class="tab-pane fade" id="profile-icon" role="tabpanel"
                                aria-labelledby="profile-icon-tab">
                                <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            </div>
                            <div class="tab-pane fade" id="contact-icon" role="tabpanel"
                                aria-labelledby="contact-icon-tab">
                                <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection

@section('script')
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
@endsection