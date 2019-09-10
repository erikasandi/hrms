@extends('layouts.metronic.asset')

@section('page-level-styles')
    <link href="{!! asset('metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />') !!}">
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
                            <span class="caption-subject bold uppercase"> Edit Work Schedule</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('workschedule') !!}">
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
                        <form role="form" method="post" action="{!! url('workschedule/' . $schedule->id . '/update') !!}" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="title" class="form-control" placeholder="Title" value="{!! $schedule->title !!}" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="text" name="started_at" class="form-control date-picker" id="datepicker1" value="@if ($schedule->started_at != ''){!! Carbon\Carbon::createFromFormat('Y-m-d', $schedule->started_at)->format('Y-m-d') !!}@endif">
                                        </div>               
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="text" name="ended_at" class="form-control date-picker" id="datepicker2" value="@if ($schedule->ended_at != ''){!! Carbon\Carbon::createFromFormat('Y-m-d', $schedule->ended_at)->format('Y-m-d') !!}@endif">
                                        </div>   
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" placeholder="Description">{!! $schedule->description !!}</textarea>
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
    <script src="{!! asset('metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}" type="text/javascript"></script>
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