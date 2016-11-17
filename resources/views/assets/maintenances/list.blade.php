<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-blue"></i>
            <span class="caption-subject font-blue sbold uppercase">Maintenances</span>
        </div>
        <div class="actions">
            <a href="{!! url('maintenance/' . $group . '/' . $assetId . '/add') !!}" class="btn btn-default" > Add Maintenance </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
            <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Maintenance Type</th>
                <th>Description</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
{{--end of portlet light bordered--}}