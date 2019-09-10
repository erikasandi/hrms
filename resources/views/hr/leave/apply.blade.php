@extends('layouts.metronic.asset')

@section('page-level-styles')   
<link rel="stylesheet" href="{{ asset('metronic/assets/global/plugins/chosen/chosen.min.css') }}">
<link rel="stylesheet" href="{{ asset('metronic/assets/global/plugins/datepicker/datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('metronic/assets/global/plugins/daterangepicker/daterangepicker-bs3.css') }}"> 
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
                            <span><i>Form</i> &nbsp;<b>Apply Leave</b></span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form role="form" method="post" action="{!! url('hr/leave/save') !!}" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="type">Leave Type</label>
                                
                            </div>
                            <div class="form-group">
                                <label for="entitlement">Entitlement</label>
                                <div>
                                    <select id="entitlement" class="form-control" name="entitlement" data-parsley-required="true" data-parsley-type="number" data-parsley-min="1" data-parsley-error-message="You dont have any entitlement, please contact HR staff">
                                        <option value="0">You dont have entitlement</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="period">Leave Period</label>
                                <input type="text" name="period" id="reservationtime" class="form-control" data-parsley-remote="{{ url('leave/check-availability') }}" data-parsley-remote-options='{ "type": "POST", "dataType": "jsonp", "data": { "_token": "{{ csrf_token() }}" } }' data-parsley-remote-validator='mycustom' data-parsley-remote-message="You have already taken a leave on that date or leave period is empty, please choose another date"/>
                            </div>
                            <div class="form-group">
                                <label for="note">Note</label>
                                <textarea class="form-control" name="note" placeholder="Note">  </textarea>
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
<script src="{{ asset('metronic/assets/global/plugins/jquery.chained.remote.js') }}"></script>
<script src="{{ asset('metronic/assets/global/plugins/chosen/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('metronic/assets/global/plugins/parsley.remote.js') }}"></script>
<script src="{{ asset('metronic/assets/global/plugins/parsley.min.js') }}"></script>
<script src="{{ asset('metronic/assets/global/plugins/daterangepicker/moment.js') }}"></script>
<script src="{{ asset('metronic/assets/global/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('metronic/assets/global/plugins/datepicker/bootstrap-datepicker.js') }}"></script>      
@endsection

@section('page-level-scripts')   
<script type="text/javascript">
    $(document).ready(function() {
        
        typeVal = $('#type').val();
        token = '{!! csrf_token() !!}';

        $("#entitlement").remoteChained({
            parents: "#type",
            url: "{{ url('setting/leave-entitlement/get-entitlement-by-type') }}"           
        });

        $( '#type' ).trigger( 'change' );
    });

    $('[name="period"]').parsley()
    .addAsyncValidator('mycustom', function (xhr) {
        // console.log(this.$element);
        return 200 === xhr.status;
    });

    $('.parsley-form').parsley();
    $(".dpicker").datepicker({ autoclose: true, format: 'dd-mm-yyyy' });
    $('#reservationtime').daterangepicker({
        format: 'YYYY-MM-DD'
    });
</script>
@endsection