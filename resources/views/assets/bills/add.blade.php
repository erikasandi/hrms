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
                                <span class="caption-subject bold uppercase"> Add Bill</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-xs sbold green" href="{!! url('asset-by-group/' . $group . '/' . $assetId . '/detail#tab_bills') !!}">
                                    <i class="fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form role="form" method="post" action="{!! url('bill/' . $group . '/' . $assetId . '/save') !!}" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <input type="hidden" name="site_id" value="{!! session('gSite') !!}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Bill Date</label>
                                                    <input type="text" name="date" class="form-control date-picker">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tariff Code</label>
                                                    <input type="text" name="tariff_code" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Water Usage</label>
                                                    <input type="text" name="water_usage" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Bill Amount</label>
                                                    <input type="text" name="bill_amount" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-default sbold green">Save</button>
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
    <script src="{!! asset('metronic/assets/global/plugins/moment.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/jquery-repeater/jquery.repeater.js') !!}" type="text/javascript"></script>
@endsection

@section('page-level-scripts')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('.date-picker').datepicker({
                orientation: "left",
                autoclose: true
            });

            $('.mt-repeater').repeater({
                initEmpty: true,
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    if (confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                    }
                },
                isFirstItemUndeletable: true
            });
        });
    </script>
@endsection