@extends('layouts.metronic.asset')

@section('page-level-styles')
<link rel="stylesheet" href="{{ asset('metronic/assets/global/plugins/chosen/chosen.min.css') }}">
<link rel="stylesheet" href="{{ asset('metronic/assets/global/plugins/datatables/jquery.dataTables.min.css') }}">
<link href="{!! asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
 <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<section class="panel panel-default">
					<header class="panel-heading grey">
						<div class="pull-left"><h5><strong>{{ $panelTitle }}</strong></h5></div>
						<div class="pull-right"><a href="{{{ url('hr/employee/'.$emp->id.'/edit') }}}" class="btn btn-default btn-mid ">Edit</a>&nbsp;<a href="{{{ url('hr/employee') }}}" class="btn btn-default btn-mid ">Back</a></div>
						<div class="clearfix"></div>
					</header>
					<div class="panel-body">						
						<form class="form-horizontal ml0">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="col-sm-2 control-label">Code</label>
									<div class="col-sm-10"><p class="form-control-static" id="employee_id">{{ $emp->code }}</p></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Name</label>
									<div class="col-sm-10"><p class="form-control-static">{{ $emp->firstname }}</p></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="col-sm-2 control-label">Division</label>
									<div class="col-sm-10"><p class="form-control-static">{{ $emp->employeePosition->position->division->name }}</p></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Position</label>
									<div class="col-sm-10"><p class="form-control-static">{{ $emp->employeePosition->position->name }}</p></div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="box-tab mt20" id="myTabs">
									<ul class="nav nav-tabs" >
										<li class="active"><a href="#general-info" data-toggle="tab">General Info</a></li>
										<li><a href="#work-history" data-toggle="tab">Work History</a></li>
										<li><a href="#education-history" data-toggle="tab">Education History</a></li>
										<li><a href="#training-history" data-toggle="tab">Training History</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade active in" id="general-info">
											@include('hr.employee.general-info')
										</div>
										<div class="tab-pane fade" id="work-history">
											@include('hr.employee.work-history.index')
										</div>
										<div class="tab-pane fade" id="education-history">
											@include('hr.employee.education-history.index')
										</div>
										<div class="tab-pane fade" id="training-history">
											@include('hr.employee.training-history.index')
										</div>
									</div>
								</div>
							</div> <!-- col-lg-12 -->
						</form>
					</div> <!-- panel-body -->
				</section> <!-- panel panel-default -->
			</div> <!-- col-lg-12 -->
		</div> <!-- row -->
	</div>
</div>
@endsection

@section('page-level-plugins')
	<!-- add bootbox modal library -->
	<script src="{{ asset('metronic/assets/global/js/bootbox.js') }}"></script>
	<script src="{!! asset('metronic/assets/global/scripts/datatable.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/bootbox/bootbox.min.js') !!}" type="text/javascript"></script>
@endsection

@section('page-level-scripts')
	<script src="{!! asset('metronic/assets/global/scripts/delete-confirmation.js') !!}" type="text/javascript"></script>

	<script type="text/javascript">
		
        
	    $(document).ready(function() {
	        $('#workhistory').DataTable({
	            processing: true,
	            serverSide: true,
	            ajax: {
	                    url: '{!! route('workhistory.data') !!}',
	                    data: { 'employee_id': '{!! $emp->id !!}' }
	                },
	            columns: [
	                { data: 'company', name: 'company' },
	                { data: 'position', name: 'position' },                
	                { data: 'started_at', name: 'start' },
	                { data: 'ended_at', name: 'until' },                    
	                { data: 'action', name: 'action', orderable: false, searchable: false, "width": "120px" }
	            ]
	        });
	    });
		    
	    $(document).ready(function() {
	        $('#educationhistory').DataTable({
	            processing: true,
	            serverSide: true,
	            ajax: {
	                    url: '{!! route('educationhistory.data') !!}',
	                    data: { 'employee_id': '{!! $emp->id !!}' }
	                },
	            columns: [
	                { data: 'grade', name: 'grade' },
	                { data: 'place', name: 'place' },  
	                { data: 'score', name: 'score' },               
	                { data: 'started_at', name: 'start' },
	                { data: 'ended_at', name: 'until' },                    
	                { data: 'action', name: 'action', orderable: false, searchable: false, "width": "120px" }
	            ]
	        });
	    });

	    $(document).ready(function() {
	        $('#traininghistory').DataTable({
	            processing: true,
	            serverSide: true,
	            ajax: {
	                    url: '{!! route('traininghistory.data') !!}',
	                    data: { 'employee_id': '{!! $emp->id !!}' }
	                },
	            columns: [
	                { data: 'place', name: 'place' },
	                { data: 'subject', name: 'subject' }, 	                               
	                { data: 'started_at', name: 'start' },
	                { data: 'ended_at', name: 'until' },
	                { data: 'description', name: 'description' },                    
	                { data: 'action', name: 'action', orderable: false, searchable: false, "width": "120px" }
	            ]
	        });
	    });
	</script>
@endsection



