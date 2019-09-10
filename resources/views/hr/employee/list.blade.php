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
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="fa fa-building-o font-dark"></i>
                                <span><i>List of &nbsp;</i><b>Employee</b></span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-xs sbold green" href="{!! url('hr/recruitment') !!}">
                                    <i class="fa fa-plus"></i> Add New
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
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="employee_1">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Name</th>  
                                    <th>Division</th>
                                    <th>Position</th> 
                                    <th>Superior</th>
                                    <th>Gender</th> 
                                    <th>Status</th>                                                 
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
    <script>
        $(function() {
            $('#employee_1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('employee.data') !!}',
                columns: [
                    { data: 'employee_id', name: 'code' },
                    { data: 'firstname', name: 'name' },  
                    { data: 'employeeDivision', name: 'division' },                    
                    { data: 'employeePosition', name: 'position' },
                    { data: 'employeeSuperior', name: 'superior' },                    
                    { data: 'employeeGender', name: 'gender' }, 
                    { data: 'employeeStatus', name: 'status' },           
                    { data: 'action', name: 'action', orderable: false, searchable: false, "width": "175px" }
                ]
            });
        });
    </script>
    <script src="{!! asset('metronic/assets/global/scripts/delete-confirmation.js') !!}" type="text/javascript"></script>
@endsection