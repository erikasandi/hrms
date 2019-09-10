@extends('layouts.metronic.asset')

@section('page-level-styles') 	
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="{!! asset('metronic/assets/global/plugins/datepicker/css/datepicker.css') !!}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">	
		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div id="rootwizard">
						<form role="form" method="post" action="{!! route('ajax.saverecruitment') !!}">				
							{{ csrf_field() }}
							<div class="portlet-title">
								<div class="caption font-dark">
		                            <i class="fa fa-building-o font-dark"></i>
		                            <span class="caption-subject bold uppercase"> Recruitment Form</span>
		                        </div>							
							</div>
							<div class="navbar">
							  	<div class="navbar-inner">
							    	<div class="container">
										<ul>
									  		<li><a href="#tab1" data-toggle="tab">Basic Information</a></li>
											<li><a href="#tab2" data-toggle="tab">Personal Details</a></li>
											<li><a href="#tab3" data-toggle="tab">Work Details</a></li>						
										</ul>
							 		</div>
								</div>
							</div>
							<div class="portlet-title">
								<div id="bar" class="progress">
						     		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
						     		</div>
						    	</div>
						    </div>
						    <div class="portlet-body">					    		
						    	<div class="form-body">
									<div class="tab-content">
									    <div class="tab-pane" id="tab1">
									    	<div class="col-lg-6">
							                    <div class="form-group">
							                        <label for="employee_id">Employee ID </label>
							                        <div>
							                            <input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="Employee ID" autofocus   />
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="firstname">First Name</label>
							                        <div class='input-group'>
							                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" />
							                            <span class="input-group-addon">
		                                                    <span class="glyphicon glyphicon-user"></span>
		                                                </span>
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="lastname">Last Name</label>
							                        <div>
							                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" />
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="phone">Phone</label>
							                        <div class='input-group'>
							                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" />
							                            <span class="input-group-addon">
		                                                    <span class="glyphicon glyphicon-phone"></span>
		                                                </span>
							                        </div>
							                    </div> 
							                    <div class="form-group">
							                        <label for="phone_other">Phone Other</label>
							                        <div class='input-group'>
							                            <input type="text" class="form-control" name="phone_other" id="phone_other" placeholder="Phone (Other)" />
							                            <span class="input-group-addon">
		                                                    <span class="glyphicon glyphicon-phone-alt"></span>
		                                                </span>						                            
							                        </div>
							                    </div>
							                </div>
							                <div class="col-lg-6">
							                    <div class="form-group">
							                        <label for="email">Email</label>
							                        <div class='input-group'>
							                            <input type="text" class="form-control" id='email' name="email" placeholder="Email"  />
							                            <span class="input-group-addon">
		                                                    <span class="glyphicon glyphicon-envelope"></span>
		                                                </span>
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="email_other">Email Other</label>
							                        <div>
							                            <input type="text" class="form-control" name="email_other" id="email_other" placeholder="Email (Other)" />
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="jamsostek_number">Jamsostek</label>
							                        <div>
							                            <input type="text" class="form-control" name="jamsostek_number" id="jamsostek_number" placeholder="Jamsostek" />
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="npwp_number">NPWP</label>
							                        <div>
							                            <input type="text" class="form-control" name="npwp_number" id="npwp_number" placeholder="NPWP" />
							                        </div>
							                    </div>
							                </div> <!-- col-lg-6 -->
							                <div class="clearfix"></div>
									    </div>
									    <div class="tab-pane" id="tab2">
									      	<div class="col-lg-6">
							                    <div class="form-group">
							                        <label for="sex">Sex</label>
							                        {!! $gender !!}
							                    </div>
							                    <div class="form-group">
							                        <label for="place_of_birth">Place of Birth</label>
							                        <div>
							                            <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" placeholder="Place of Birth" />
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="date_of_birth">Date of Birth</label>
							                        <div class='input-group date'>
					                                	<input type="text" class="form-control datepicker" name="date_of_birth" id="date_of_birth" placeholder="Select Date" />
					                                	<span class="input-group-addon">
		                                                    <span class="glyphicon glyphicon-calendar"></span>
		                                                </span>
					                                </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="marital_status">Marital Status</label>
							                        {!! $marital !!}
							                    </div>
							                    <div class="form-group">
							                        <label for="religion">Religion</label>
							                        {!! $religion !!}
							                    </div>
							                </div>
							                <div class="col-lg-6">
							                    <div class="form-group">
							                        <label for="address">Address</label>
							                        <div>
							                            <textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="province">Province</label>
							                        <div>
							                            <input type="text" class="form-control" name="province" id="province" placeholder="Province" />
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="city">City</label>
							                        <div>
							                            <input type="text" class="form-control" name="city" id="city" placeholder="City" />
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="zipcode">Zipcode</label>
							                        <div>
							                            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zipcode" />
							                        </div>
							                    </div>
							                </div>
							                <div class="clearfix"></div>
									    </div>
										<div class="tab-pane" id="tab3">
											<div class="col-lg-6">
							                    <div class="form-group">
							                        <label for="position">Position</label>
							                        {!! $position !!}
							                    </div>
							                    <div class="form-group">
							                        <label for="status">Employment Status</label>
							                        {!! $status !!}
							                    </div>
							                    <div class="form-group">
							                        <label for="superior">Superior</label>
							                        {!! $employee !!}
							                    </div>
							                    <div class="form-group">
							                        <label for="schedule">Work Schedule</label>
							                        {!! $schedule !!}
							                    </div>
							                </div>
							                <div class="col-lg-6">
							                    <div class="form-group">
							                        <label for="join_date">Date of Join</label>
							                        <div class='input-group date'>
		                                                <input type="text" class="form-control datepicker" id="join_date" name="join_date" placeholder="Date of Join" />
		                                                <span class="input-group-addon">
		                                                    <span class="glyphicon glyphicon-calendar"></span>
		                                                </span>
		                                            </div>						                        
							                    </div>
							                    <div class="form-group">
							                        <label for="started_at">Period</label>
							                        <div class="row">
							                            <div class="col-xs-6">
							                            	<div class='input-group date'>
							                                	<input type="text" class="form-control datepicker" name="started_at" placeholder="Start Date" />
							                                	<span class="input-group-addon">
				                                                    <span class="glyphicon glyphicon-calendar"></span>
				                                                </span>
							                                </div>
							                            </div>
							                            <div class="col-xs-6">
							                            	<div class='input-group date'>
							                                	<input type="text" class="form-control datepicker" name="ended_at" placeholder="End Date" />
							                                	<span class="input-group-addon">
				                                                    <span class="glyphicon glyphicon-calendar"></span>
				                                                </span>
							                                </div>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="form-group">
							                            <label for="leave_need_approval">Leave Need Approval</label>
							                            {!! $cbLeaveApproval !!}
							                    </div>
							                </div>
							                <div class="clearfix"></div>
									    </div>

										<ul class="pager wizard">
											<li class="previous first" style="display:none;"><a href="#">First</a></li>
											<li class="previous" ><a href="#">Previous</a></li>
											<li class="next last" style="display:none;"><a href="#">Last</a></li>
										  	<li class="next" ><a href="#">Next</a></li>
										  	<li class="finish" ><a href="#">Finish</button></li>
										</ul>
									</div>
								</div>							
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT-->
	</div>
</div>
<!-- END CONTENT -->
@endsection

@section('page-level-plugins')
	
	<script src="{{ asset('metronic/assets/global/plugins/datepicker/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('metronic/assets/global/plugins/stepy/jquery.validate.min.js') }}"></script>	    
	<script src="{{ asset('metronic/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
	
@endsection

@section('page-level-scripts')
<script>
	$(document).ready(function() {
		$('.datepicker').datepicker({
			format: 'dd/mm/yyyy'
		});

	  	$('#rootwizard').bootstrapWizard(
	  		{onTabClick: function(tab, navigation, index) {
			alert('on tab click disabled');
			return false;
			},
	  		
	  		onNext: function(tab, navigation, index) {
				if(index==1) {
					
					if(!$('#employee_id').val()) {
						alert('You must enter employee ID/Code !');
						$('#employee_id').focus();
						return false;
					} else {
						var employee_id = $(this).val();
        				var _token = "{!! csrf_token() !!}";
				        $.ajax({
						    url : "{!! route('/ajax/get-employee') !!}",
						    method : "post",
						    data : {employee_id: employee_id, _token: _token},
						    error: function (jqXHR, textStatus, errorThrown) {
						        //Check for error
						        alert('Employee ID is Ready !!');
								$('#employee_id').focus();
								return false;
						    }				    
						});			
					}

					if(!$('#firstname').val()) {
						alert('You must enter employee Name !');
						$('#firstname').focus();
						return false;
					}
					//Email Validation
					if (!validateEmail($('#email').val())){
						alert('You must enter valid email address !');
						$('#email').focus();
						return false;	
					}
					
					function validateEmail(email) {
					  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					  return re.test(email);
					}
				}
			}, 
			
			onTabShow: function(tab, navigation, index) {
				var $total = navigation.find('li').length;
				var $current = index+1;
				var $percent = ($current/$total) * 100;
				$('#rootwizard .progress-bar').css({width:$percent+'%'});
		}});
	  
	  	$('#rootwizard .finish').click(function() {
	  		if(!$('#join_date').val()) {
				alert('You must enter Join Date');
				$('#join_date').focus();
				return false;
			} 
			else {				
			    // Get the form.
			    var form = $('#rootwizard');
			    var _token = "{!! csrf_token() !!}";				
				var formData = $(form).serialize();
				alert('Ajax');
				$.ajax({
				    url : "{!! route('/ajax/save-recruitment') !!}",
				    method : "post",
				    data : {formData},
				    success: function(data) {
				        //Proceed to success
				        alert('Finished!, Starting over!');
				    },
				    error: function (jqXHR, textStatus, errorThrown) {
				        //Check for error
				        alert('Not Finished!');
				    }				    
				});				
			}
		});		
	});
</script>
@endsection