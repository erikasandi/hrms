@extends('layouts.metronic.asset')

@section('page-level-styles')
<link href="{!! asset('metronic/assets/global/plugins/datepicker/css/datepicker.css') !!}" rel="stylesheet" type="text/css" />
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
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-building-o font-dark"></i>
                            <span class="caption-subject bold uppercase"> Add Leave Period</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('leaveperiod') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form role="form" method="post" action="{!! url('leaveperiod/save') !!}" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                                            <label>Period Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name Period" autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">{!! $errors->first('name') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group @if ($errors->has('started_date')) has-error @endif">
                                            <label>Start Date</label>
                                            <div class='input-group date'>
                                                <input type="text" name="started_date" class="form-control datepicker" placeholder="Select Date" >
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                            @if ($errors->has('started_date'))
                                                <span class="help-block">{!! $errors->first('started_date') !!}</span>
                                            @endif
                                        </div>                                        
                                        <div class="form-group @if ($errors->has('ended_date')) has-error @endif">
                                            <label>End Date</label>       
                                            <div class='input-group date'>                                     
                                                <input type="text" name="ended_date" class="form-control datepicker" placeholder="Select Date">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                             @if ($errors->has('ended_date'))
                                                <span class="help-block">{!! $errors->first('ended_date') !!}</span>
                                            @endif 
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm sbold green">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->

</div>
<!-- END CONTENT -->
@endsection

@section('page-level-plugins')
<script src="{{ asset('metronic/assets/global/plugins/datepicker/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
@endsection

@section('page-level-scripts')
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });
    });
</script>
@endsection