@extends('layouts.metronic.asset')

@section('page-level-styles')
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
                            <span class="caption-subject bold uppercase"> Edit Leave Type</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('leavetype') !!}">
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
                        <form role="form" method="post" action="{!! url('leavetype/' . $leavetype->id . '/update') !!}" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="type" class="form-control" placeholder="Type" value="{!! $leavetype->type !!}" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>Quota</label>
                                            <textarea name="quota" class="form-control" placeholder="Quota">{!! $leavetype->quota !!}</textarea>
                                        </div>    
                                        <div class="form-group">
                                            <label for="period">Period</label>
                                            <select id="period" class="form-control chosen" data-placeholder="Select Period" name="period"><option value="Monthly">Monthly</option><option value="Yearly" selected="selected">Yearly</option></select>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="use_calendar" value="1" checked> Use calendar date
                                            </label>
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
@endsection

@section('page-level-scripts')
@endsection