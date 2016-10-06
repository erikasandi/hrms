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
                            <span class="caption-subject bold uppercase"> Add Asset</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('/asset') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form role="form" method="post" action="{!! url('asset/save') !!}" >
                            {{ csrf_field() }}
                            <input type="hidden" name="site_id" value="{!! session('gSite') !!}">
                            <div class="form-body">
                                <div class="row">
                                    @if ($errors->has('site_id'))
                                        <div class="alert alert-danger alert-dismissable col-lg-12">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <strong>Error!</strong> {!! $errors->first('site_id') !!}
                                        </div>
                                    @endif
                                    <div class="col-lg-6">
                                        <div class="form-group  @if ($errors->has('name')) has-error @endif">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{!! old('name') !!}" autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">{!! $errors->first('name') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group  @if ($errors->has('code')) has-error @endif">
                                            <label>Code</label>
                                            <input type="text" name="code" class="form-control" placeholder="Code" value="{!! old('code') !!}">
                                            @if ($errors->has('code'))
                                                <span class="help-block">{!! $errors->first('code') !!}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group  @if ($errors->has('location_id')) has-error @endif">
                                            <label>Location</label>
                                            {!! $location !!}
                                            @if ($errors->has('location_id'))
                                                <span class="help-block">{!! $errors->first('location_id') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group  @if ($errors->has('asset_type_id')) has-error @endif">
                                            <label>Asset Type</label>
                                            {!! $assetType !!}
                                            @if ($errors->has('asset_type_id'))
                                                <span class="help-block">{!! $errors->first('asset_type_id') !!}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div id="asset-tab">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_general" data-toggle="tab"> General </a>
                                            </li>
                                            <li>
                                                <a href="#tab_images" data-toggle="tab"> Images </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_general">
                                                <div class="col-lg-12" id="form-detail"></div>
                                            </div>
                                            <div class="tab-pane" id="tab_images">
                                                <div class="tab-pane" id="tab_images">
                                                    <div class="alert alert-success margin-bottom-10">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                        <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified. </div>
                                                    <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                                        <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-success">
                                                            <i class="fa fa-plus"></i> Select Files </a>
                                                        <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn btn-primary">
                                                            <i class="fa fa-share"></i> Upload Files </a>
                                                    </div>
                                                    <div class="row">
                                                        <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-sm sbold green">Save</button>
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
    <script src="{!! asset('metronic/assets/global/plugins/jquery.blockui.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/moment.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/plupload/js/plupload.full.min.js') !!}" type="text/javascript"></script>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('metronic/assets/pages/scripts/ecommerce-products-edit.js') !!}" type="text/javascript"></script>
    <script>
        var assetFormUrl = '{!! $assetFormUrl !!}';
        $(function(){
            $('#asset-type').trigger('change');
        });
    </script>
    <script src="{!! asset('scripts/asset.js') !!}"></script>
@endsection