@extends('master')

@section('css-before-main')
<link rel="stylesheet" href="{{ asset('metronic/assets/global/plugins/datepicker/datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('metronic/assets/global/plugins/stepy/jquery.stepy.css') }}">
<link rel="stylesheet" href="{{ asset('metronic/assets/global/plugins/chosen/chosen.min.css') }}">
@endsection

@section('content')
<div class="widget">
    <div class="widget-body no-p">
        <form id="stepy" class="stepy" action="{{ url('hr/recruitment-save') }}" method="POST">
            <fieldset title="Basic">
                <legend>Basic Information</legend>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="code">Code</label>
                        <div>
                            <input type="text" class="form-control" name="code" placeholder="Employee Code" autofocus />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <div>
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <div>
                            <input type="text" class="form-control" name="lastname"  placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone_other">Phone Other</label>
                        <div>
                            <input type="text" class="form-control" name="phone_other" placeholder="Phone (Other)" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div>
                            <input type="text" class="form-control" name="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_other">Email Other</label>
                        <div>
                            <input type="text" class="form-control" name="email_other" placeholder="Email (Other)" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jamsostek_number">Jamsostek</label>
                        <div>
                            <input type="text" class="form-control" name="jamsostek_number" placeholder="Jamsostek" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="npwp_number">NPWP</label>
                        <div>
                            <input type="text" class="form-control" name="npwp_number" placeholder="NPWP" />
                        </div>
                    </div>
                </div> <!-- col-lg-6 -->
                <div class="clearfix"></div>
            </fieldset>

            <fieldset title="Personal">
                <legend>Personal Details</legend>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="sex">Sex</label>
                        <div>{!! $cbSex !!}</div>
                    </div>
                    <div class="form-group">
                        <label for="place_of_birth">Place of Birth</label>
                        <div>
                            <input type="text" class="form-control" name="place_of_birth" placeholder="Place of Birth" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>
                        <div>
                            <input type="text" class="form-control dpicker" name="date_of_birth" placeholder="Date of Birth" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="marital_status">Marital Status</label>
                        <div>{!! $cbMarital !!}</div>
                    </div>
                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <div>{!! $cbReligion !!}</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <div>
                            <textarea class="form-control" name="address" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="province">Province</label>
                        <div>
                            <input type="text" class="form-control" name="province" placeholder="Province" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <div>
                            <input type="text" class="form-control" name="city" placeholder="City" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="zipcode">Zipcode</label>
                        <div>
                            <input type="text" class="form-control" name="zipcode" placeholder="Zipcode" />
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </fieldset>
            <fieldset title="Work">
                <legend>Work Details</legend>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="position">Position</label>
                        <div>
                            {!! $cbPosition !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Employment Status</label>
                        <div>
                            {!! $cbEmploymentStatus !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="superior">Superior</label>
                        <div>
                            {!! $cbSuperior !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="superior">Work Schedule</label>
                        <div>
                            {!! $cbSchedule !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="join_date">Date of Join</label>
                        <div>
                            <input type="text" class="form-control dpicker" name="join_date" placeholder="Date of Join" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="started_at">Period</label>
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" class="form-control dpicker" name="started_at" placeholder="Start Date" />
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control dpicker" name="ended_at" placeholder="End Date" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="leave_need_approval">Leave Need Approval</label>
                            <div>
                                {!! $cbLeaveApproval !!}
                            </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </fieldset>
            {!! \Form::hidden('_token', csrf_token()) !!}
            <button class="btn btn-primary stepy-finish pull-right"><i class="ti-share mr5"></i>Finish</button>
        </form>
    </div>
</div>

@endsection

@section('js-before-main')
<!-- <script src="{{ asset('plugins/parsley.min.js') }}"></script> -->
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- <script src="{{ asset('plugins/timepicker/jquery.timepicker.min.js') }}"></script> -->
@endsection

@section('js-after-main')
<script src="{{ asset('metronic/assets/global/plugins/stepy/jquery.validate.min.js') }}"></script>
<script src="{{ asset('metronic/assets/global/plugins/stepy/jquery.stepy.js') }}"></script>
<script src="{{ asset('metronic/assets/global/plugins/chosen/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('metronic/assets/global/js/form-wizard.js') }}"></script>

<script type="text/javascript">
    // $('.parsley-form').parsley();
    $(".dpicker").datepicker({ orientation: 'top', format: 'dd-mm-yyyy', autoclose: true });
    // $(".timepicker").timepicker({ 'timeFormat': 'H:i', 'step': 60 });
</script>
@endsection
