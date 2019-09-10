@extends('layouts.metronic.asset')

@section('page-level-styles')
    <link href="{!! asset('metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />') !!}">
    <link href="{!! asset('metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                <!-- <section class="panel panel-default"> -->
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-building-o font-dark"></i>
                            <span class="caption-subject bold uppercase">{{ $panelTitle }}</span>
                        </div> 
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('hr/employee') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>               
                    </div>

                    <div class="portlet-body">                
                        @if (session('message'))
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <strong>Info!</strong> {{ session('message') }}
                        </div>
                        @endif
                        
                        {!! Form::open(array('url' => 'hr/employee/'.$id.'/update', 'class' => 'parsley-form')) !!}

                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg-6">              
                                    <div class="form-group">
                                        <label for="code">Code</label>
                                        <div>
                                            <input type="text" class="form-control" id="code" name="code" data-parsley-required="true" data-parsley-trigger="change" placeholder="Employee Code" value="{{ $employee_id }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <div>
                                            <input type="text" class="form-control" id="firstname" name="firstname" data-parsley-required="true" data-parsley-trigger="change" placeholder="First Name" value="{{ $firstname }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <div>
                                            <input type="text" class="form-control" id="lastname" name="lastname"  placeholder="Last Name" value="{{ $lastname }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jamsostek_number">Jamsostek</label>
                                        <div>
                                            <input type="text" class="form-control" id="jamsostek_number" name="jamsostek_number" placeholder="Jamsostek"  value="{{ $jamsostek_number }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="npwp_number">NPWP</label>
                                        <div>
                                            <input type="text" class="form-control" id="npwp_number" name="npwp_number" placeholder="NPWP"  value="{{ $npwp_number }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="place_of_birth">Place of Birth</label>
                                        <div>
                                            <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" placeholder="Place of Birth" value="{{ $place_of_birth }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <div>
                                            <input type="text" class="form-control dpicker" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" data-parsley-required="true" data-parsley-trigger="change" value="{{ $date_of_birth }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="sex">Sex</label>
                                        <div>{!! $cbSex !!}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="marital_status">Marital Status</label>
                                        <div>{!! $cbMarital !!}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <div>{!! $cbReligion !!}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <div>
                                            <input type="text" class="form-control" id="phone" name="phone" data-parsley-required="true" data-parsley-trigger="change" placeholder="Phone" value="{{ $phone }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_other">Phone Other</label>
                                        <div>
                                            <input type="text" class="form-control" id="phone_other" name="phone_other" placeholder="Phone (Other)" value="{{ $phone_other }}">
                                        </div>
                                    </div>
                                </div> <!-- col-lg-6 -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div>
                                            <input type="text" class="form-control" id="email" name="email" data-parsley-required="true" data-parsley-trigger="change" placeholder="Email" value="{{ $email }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_other">Email Other</label>
                                        <div>
                                            <input type="text" class="form-control" id="email_other" name="email_other" placeholder="Email (Other)"  value="{{ $email_other }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="join_date">Join Date</label>
                                        <div>
                                            <input type="text" class="form-control dpicker" id="join_date" name="join_date" placeholder="Join Date" data-parsley-required="true" data-parsley-trigger="change" value="{{ $join_date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <div>{!! $cbPosition !!}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="schedule">Work Schedule</label>
                                        <div>{!! $cbSchedule !!}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="superior">Superior</label>
                                        <div>{!! $cbSuperior !!}</div>
                                    </div>
                                    <div class="form-group mb5">
                                        <label for="started_at">Period</label>
                                        <div class="row ">
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control dpicker" name="started_at" placeholder="Start Date" />
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control dpicker" name="ended_at" placeholder="End Date" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="employment_status">Employment Status</label>
                                        <div>{!! $cbEmploymentStatus !!}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="leave_need_approval">Leave Needs Approval ?</label>
                                        <div>{!! $cbLeaveApproval !!}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <div>
                                            <textarea class="form-control" data-parsley-required="true" data-parsley-trigger="change" name="address" placeholder="Address">{{ $address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="province">Province</label>
                                        <div>
                                            <input type="text" class="form-control" id="province" name="province" placeholder="Province" value="{{ $province }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <div>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{ $city }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="zipcode">Zipcode</label>
                                        <div>
                                            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode" value="{{ $zipcode }}">
                                        </div>
                                    </div>
                                </div> <!-- col-lg-6 -->
                            
                                {!! Form::hidden('act', $act) !!}
                                @if ($act == 'edit')
                                    {!! Form::hidden('id', $id) !!}
                                @endif
                                <div > 
                                    <button type="submit" class="btn btn-sm sbold green">Submit</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div> <!-- form-body -->

                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->
    </div>
</div>
@endsection

@section('page-level-plugins')
<script src="{!! asset('metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}" type="text/javascript"></script>
@endsection

@section('page-level-scripts')
<script type="text/javascript">
    //$('.parsley-form').parsley();
    $(".dpicker").datepicker({ orientation: 'top', autoclose: true, format: 'dd-mm-yyyy' });
    // $(".timepicker").timepicker({ 'timeFormat': 'H:i', 'step': 60 });
</script>
@endsection
