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
                                <span class="caption-subject bold uppercase"> Edit Maintenance</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-xs sbold green" href="{!! url('asset-by-group/' . $group . '/' . $assetId . '/detail#tab_maintenances') !!}">
                                    <i class="fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form role="form" method="post" action="{!! url('maintenance/' . $group . '/' . $assetId . '/' . $maintenance->id . '/update') !!}" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <input type="hidden" name="site_id" value="{!! session('gSite') !!}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" value="{!! $maintenanceDate !!}" name="date" class="form-control date-picker">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Maintenance Type</label>
                                                {!! $maintenanceTypeSelect !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" placeholder="Description">{!! $maintenance->description !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Performance</label>
                                                <textarea name="performance" class="form-control" placeholder="Performance">{!! $maintenance->performance !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 margin-top-10"><h4>Images</h4></div>
                                        <div class="col-md-12">
                                            <div class="form-group mt-repeater">
                                                <div data-repeater-list="images">
                                                    @if(count($images) > 0)
                                                        @foreach($images as $image)
                                                        <div data-repeater-item class="mt-repeater-item">
                                                            <div class="row mt-repeater-row">
                                                                <div class="form-group col-md-3">
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                                            <img src="{!! url('images/medium/' . $image->file_name) !!}">
                                                                        </div>

                                                                        <div>
                                                                            <span class="btn red btn-outline btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="image">
                                                                            </span>
                                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-8">
                                                                    <label class="control-label">Image Description</label>
                                                                    <textarea class="form-control" name="image_description"></textarea>
                                                                </div>
                                                                <input type="hidden" name="image_id" value="{!! $image->id !!}">
                                                                <div class="col-md-1">
                                                                    <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete">
                                                                        <i class="fa fa-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{--end of mt-repeater-row--}}
                                                        </div>
                                                        @endforeach
                                                        {{--end of mt-repeater-item--}}
                                                    @else
                                                        <div data-repeater-item class="mt-repeater-item">
                                                            <div class="row mt-repeater-row">
                                                                <div class="form-group col-md-3">
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>

                                                                        <div>
                                                                            <span class="btn red btn-outline btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="image">
                                                                            </span>
                                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-8">
                                                                    <label class="control-label">Image Description</label>
                                                                    <textarea class="form-control" name="image_description"></textarea>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete">
                                                                        <i class="fa fa-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{--end of mt-repeater-row--}}
                                                        </div>
                                                        {{--end of mt-repeater-item--}}
                                                    @endif
                                                </div>
                                                <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                                    <i class="fa fa-plus"></i> Add Image
                                                </a>&nbsp; <button type="submit" class="btn btn-default sbold green">Save</button>
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