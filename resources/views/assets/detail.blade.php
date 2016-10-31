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
                                <span class="caption-subject bold uppercase"> Asset's Detail</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-xs sbold green" href="{!! url('/asset') !!}">
                                    <i class="fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form role="form" id="form_sample_1" method="post" action="{!! url('asset/save') !!}" >
                                {{ csrf_field() }}
                                <input type="hidden" name="site_id" value="{!! session('gSite') !!}">
                                {{--form-body--}}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <div class="form-group  @if ($errors->has('name')) has-error @endif">
                                                    <label>Name <span class="required"> * </span></label>
                                                    <span class="form-control">{!! $asset->name !!}</span>
                                                </div>
                                                <div class="form-group  @if ($errors->has('code')) has-error @endif">
                                                    <label>Code <span class="required"> * </span></label>
                                                    <span class="form-control">{!! $asset->code !!}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group  @if ($errors->has('location_id')) has-error @endif">
                                                    <label>Location</label>
                                                    <span class="form-control">{!! $asset->location->name !!}</span>
                                                </div>
                                                <div class="form-group  @if ($errors->has('asset_type_id')) has-error @endif">
                                                    <label>Asset Type</label>
                                                    <span class="form-control">{!! $asset->assetType->name !!}</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{--asset-tab--}}
                                        <div id="asset-tab" class="col-lg-12">
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
                                                    @if($asset->asset_type_id == 2)
                                                        @include('assets.asset-type-details.m-e')
                                                    @elseif($asset->asset_type_id == 3)
                                                        @include('assets.asset-type-details.electrical')
                                                    @elseif($asset->asset_type_id == 4)
                                                        @include('assets.asset-type-details.civil')
                                                    @endif
                                                </div>
                                                <div class="tab-pane" id="tab_images">
                                                    <div class="tab-pane images-repeater" id="tab_images">
                                                        <div class="portlet-body">
                                                            <div class="mt-element-card mt-element-overlay">
                                                                {{--row--}}
                                                                <div class="row">
                                                                    @if ($asset->images()->count() > 0)
                                                                        @foreach($asset->images()->get() as $image)
                                                                            {{--start mt-card-item--}}
                                                                            <div class="mt-card-item col-md-3">
                                                                                <div class="mt-card-avatar mt-overlay-1">
                                                                                    <img src="{!! url('images/medium/' . $image->path) !!}" />
                                                                                    {{--overlay--}}
                                                                                    <div class="mt-overlay">
                                                                                        <ul class="mt-info">
                                                                                            <li>
                                                                                                <a class="btn default btn-outline"
                                                                                                   href="#image-{!! $image->id !!}"
                                                                                                   data-toggle="modal">
                                                                                                    <i class="icon-magnifier"></i>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    {{--end of overlay--}}
                                                                                </div>
                                                                            </div>
                                                                            {{--mt-card-item--}}
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                                {{--end of row--}}
                                                            </div>
                                                        </div>
                                                        {{--end of portlet-body--}}
                                                        @if ($asset->images()->count() > 0)
                                                            @foreach($asset->images()->get() as $image)
                                                            <div id="image-{!! $image->id !!}" class="modal fade" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content text-center">
                                                                        <div class="modal-body">
                                                                            {{--<div class="scroller" style="height:400px" data-always-visible="1" data-rail-visible1="1">--}}
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <img src="{!! url('images/large/' . $image->path) !!}">
                                                                                    </div>
                                                                                </div>
                                                                            {{--</div>--}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--end of asset-tab--}}

                                    </div>
                                </div>
                                {{--end of form--}}
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
    <script src="{!! asset('metronic/assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}" type="text/javascript"></script>
@endsection

@section('page-level-scripts')
    {{--<script src="{!! asset('metronic/assets/pages/scripts/form-validation.min.js') !!}" type="text/javascript"></script>--}}
    {{--<script src="{!! asset('metronic/assets/pages/scripts/ecommerce-products-edit.js') !!}" type="text/javascript"></script>--}}
    <script>
        var ajaxUrl = '{!! url('/ajax') !!}';
        var csrfToken = '{!! csrf_token() !!}';
    </script>
@endsection