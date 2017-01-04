@extends('layouts.metronic.asset')

@section('page-level-styles')
    <link href="{!! asset('metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />') !!}">
    <link href="{!! asset('metronic/assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}" rel="stylesheet" type="text/css" />
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
                                <span class="caption-subject bold uppercase">{!! $location->name !!} Asset's Detail</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-xs sbold green" href="{!! url('/asset-by-group/' . $group) !!}">
                                    <i class="fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form role="form" id="form_sample_1" method="post" action="{!! url('asset-by-group/' . $group . '/save') !!}" >
                                {{ csrf_field() }}
                                <input type="hidden" name="site_id" value="{!! session('gSite') !!}">
                                {{--form-body--}}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Name :</label>
                                                        <span class="form-control">{!! $asset->name !!}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Code :</label>
                                                        <span class="form-control">{!! $asset->code !!}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Asset Location / Class :</label>
                                                        <span class="form-control">{!! $asset->location->name !!}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Asset Type :</label>
                                                        <span class="form-control">{!! $asset->assetType->name !!}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--asset-tab--}}
                                        <div id="asset-tab" class="col-md-12">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_general" data-toggle="tab"> General </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_images" data-toggle="tab"> Images </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_maintenances" data-toggle="tab"> Maintenances </a>
                                                </li>
                                                @if ($group == 'commercial')
                                                <li>
                                                    <a href="#tab_bills" data-toggle="tab"> Bills </a>
                                                </li>
                                                @endif
                                            </ul>
                                            <div class="tab-content asset-tab-content">
                                                <div class="tab-pane active" id="tab_general">
                                                    @include($detailTemplate)
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
                                                <div class="tab-pane" id="tab_maintenances">
                                                    @include('assets.maintenances.list')
                                                </div>
                                                @if ($group == 'commercial')
                                                <div class="tab-pane" id="tab_bills">
                                                    @include('assets.bills.list')
                                                </div>
                                                @endif
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
    <script src="{!! asset('metronic/assets/global/scripts/datatable.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/bootbox/bootbox.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('metronic/assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}" type="text/javascript"></script>
@endsection

@section('page-level-scripts')
    <script>
        var ajaxUrl = '{!! url('/ajax') !!}';
        var csrfToken = '{!! csrf_token() !!}';
    </script>
    <script>
        $(function() {
            $('#sample_1').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('maintenance.data') !!}',
                    data: {
                        'assetId': '{!! $assetId !!}',
                        'group': '{!! $group !!}'
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'date', name: 'date', "width": "120px" },
                    { data: 'type', name: 'type', "width": "120px" },
                    { data: 'description', name: 'description' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, "width": "130px" }
                ]
            });

            @if($group == 'commercial')
            $('#bill').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('bill.data') !!}',
                    data: {
                        'assetId': '{!! $assetId !!}',
                        'group': '{!! $group !!}'
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'bill_date', name: 'bill_date', "width": "120px" },
                    { data: 'tariff_code', name: 'tariff_code', "width": "120px" },
                    { data: 'water_usage', name: 'water_usage' },
                    //{ data: 'bill_amount', name: 'bill_amount' },

                    // Edit By Erik, 22 Desember 2016
                    // Menampilkan nilai amount dengan separator ribuan
                    { data: 'bill_amount', name: 'bill_amount' , render: $.fn.DataTable.render.number('.',',',0,'Rp. ')},
                    // End
                    { data: 'action', name: 'action', orderable: false, searchable: false, "width": "130px" }
                ]
            });
            @endif

            $('#collapse_1').on('shown.bs.collapse', function () {
                $('.search-input').focus();
            });

            $('.search-close').click(function() {
                $('#collapse_1').collapse('hide');
            })
        });
    </script>
    <script src="{!! asset('metronic/assets/global/scripts/delete-confirmation.js') !!}" type="text/javascript"></script>
@endsection