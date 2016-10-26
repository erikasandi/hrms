@extends('layouts.metronic.asset')

@section('page-level-styles')
    <link href="{!! asset('metronic/assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">

    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <!-- BEGIN PAGE BAR -->
        <!-- END PAGE BAR -->

        <!-- BEGIN PAGE TITLE-->
        <!-- h1 class="page-title"> Users
            <small> list</small>
        </h1 -->
        <!-- END PAGE TITLE-->

        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-user font-dark"></i>
                            <span class="caption-subject bold uppercase"> Users List</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('user/add') !!}">
                                <i class="fa fa-plus"></i> Add New
                            </a>
                            <a class="accordion-toggle btn btn-sm sbold green" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
                                <i class="fa fa-search-plus"></i> Advanced Search
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        @if (session('message'))
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <strong>Info!</strong> {{ session('message') }}
                            </div>
                        @endif

                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Site</th>
                                <th>Role</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                        </table>
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
@endsection

@section('page-level-scripts')
    <!-- script src="{!! asset('metronic/assets/pages/scripts/table-datatables-managed.min.js') !!}" type="text/javascript"></script -->
    <script>
        $(function() {
            $('#sample_1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('user.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'site', name: 'site' },
                    { data: 'role', name: 'role' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, "width": "180px" }
                ]
            });

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