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
                            @if ($act == 'edit')
                                <span><i>edit</i> &nbsp;<b>Work History Form</b></span>                            
                            @else 
                                <span><i>add</i> &nbsp;<b>Work History Form</b></span>
                            @endif
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('hr/employee/'.$employee_id.'/detail#work-history') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!--
                        <form role="form" method="post" action="{!! url('hr/employee/workhistory/save') !!}" >
                        -->
                        <form role="form" method="post" action="{!! $save !!}" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-group">
										<label for="name">Company</label>
										<input data-parsley-required="true" type="text" class="form-control" name="company" placeholder="Enter Company Name" value="{{ $company }}" autofocus>
									</div>
									<div class="form-group">
										<label for="name">Position</label>
										<input data-parsley-required="true" type="text" class="form-control" name="position" placeholder="Enter Position" value="{{ $position }}">
									</div>
									<div class="form-group">
										<label for="started_at">Start</label>
										<input type="date" class="form-control dpicker" name="started_at" placeholder="Enter Start Date" value="{{ $started_at }}">
									</div>
									<div class="form-group">
										<label for="ended_at">Until</label>
										<input type="date" name="ended_at" class="form-control" placeholder="Enter End Date" value="{{ $ended_at }}">
									</div>
									<div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Description">{{ $description }}</textarea>
                                    </div>
									{!! Form::hidden('act', $act) !!}
									{!! Form::hidden('employee_id', $employee_id) !!}
									@if ($act == 'edit')
										{!! Form::hidden('id', $id) !!}
									@endif                                                            
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm sbold green">Save</button>
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
<script src="{{ asset('metronic/assets/global/plugins/parsley/parsley.min.js') }}"></script>         
@endsection

@section('page-level-scripts')    
<script type="text/javascript">
    $('.parsley-form').parsley();
</script>
@endsection