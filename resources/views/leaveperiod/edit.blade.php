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
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-building-o font-dark"></i>
                            <span class="caption-subject bold uppercase"> Edit Leave Period</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('leaveperiod') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                @foreach ($errors->all() as $message)
                                <span>{!! $message !!}</span>
                                @endforeach
                            </div>
                        @endif
                        <form role="form" method="post" action="{!! url('leaveperiod/' . $leaveperiod->id . '/update') !!}" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{!! $leaveperiod->name !!}" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="text" name="started_date" class="form-control datepicker" id="datepicker1" value="@if ($leaveperiod->started_date != ''){!! Carbon\Carbon::createFromFormat('Y-m-d', $leaveperiod->started_date)->format('Y-m-d') !!}@endif">
                                        </div>               
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="text" name="ended_date" class="form-control datepicker" id="datepicker2" value="@if ($leaveperiod->ended_date != ''){!! Carbon\Carbon::createFromFormat('Y-m-d', $leaveperiod->ended_date)->format('Y-m-d') !!}@endif">
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
<script type="text/javascript">
    
    $(function () {
        $( "#datepicker1" ).datepicker({
            format: "yy/mm/dd",            
            autoclose: true,
            todayHighlight: true,        
        });
        $( "#datepicker2" ).datepicker({
            format: "yy/mm/dd",
            autoclose: true,
            todayHighlight: true,        
        });
    });

</script>
@endsection