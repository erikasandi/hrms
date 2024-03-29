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
                            <!--
                            <span class="caption-subject bold uppercase"> Edit <b>Leave Entitlement</b></span>
                            -->
                            <span><i>Edit &nbsp;</i><b>Leave Entitlement</b></span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('leaveentitlement') !!}">
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
                        <form role="form" method="post" action="{!! url('leaveentitlement/' . $leaveentitlement->id . '/update') !!}" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Employee</label>
                                            <input type="text" class="form-control" placeholder="Name" value="{!! $employee->firstname !!}" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label>Leave Type</label>
                                            {!! $leavetype !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Leave Period</label>
                                            {!! $leaveperiod !!}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="num_of_days">Entitlement</label>
                                            <input type="text" class="form-control" id="num_of_days" name="num_of_days" data-parsley-required="true" data-parsley-trigger="change" placeholder="Entitlement" value="{{ $num_of_days }}" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label for="note">Note</label>
                                            <textarea class="form-control" name="note" placeholder="Note">{{ $note }}</textarea>
                                        </div>
                                    </div>
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
    $('#leavetype').change(function() {
        var leave_type_id = $(this).val();
        var _token = "{!! csrf_token() !!}";
        //$("#num_of_days").val("leave_Type");        
        $.post("{!! url('ajax/get-leave-quota') !!}", { type: leave_type_id, _token: _token },
            function(data){
                $("#num_of_days").val(data);
            }
        );
        
    });
    $(document).ready(function() {
        $('#leavetype').trigger('change');
    });
</script>
@endsection