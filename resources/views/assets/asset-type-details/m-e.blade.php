<div class="row">
    <div class="asset-type-2">
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Specification</label>
                <span class="form-control">{!! $asset->detail->specification !!}</span>
            </div>
            <div class="form-group ">
                <label>Serial Number</label>
                <span class="form-control">{!! $asset->detail->serial_number !!}</span>
            </div>
            <div class="form-group ">
                <label>Condition</label>
                <span class="form-control">{!! $asset->detail->assetCondition->name !!}</span>
            </div>
            <div class="form-group ">
                <label>Condition Details</label>
                <span class="form-control">{!! $asset->detail->condition_detail !!}</span>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Function</label>
                <span class="form-control">{!! $asset->detail->function !!}</span>
            </div>
            <div class="form-group ">
                <label>Install Date</label>
                <span class="form-control">{!! $asset->detail->install_date !!}</span>
            </div>
            <div class="form-group ">
                <label>Performance</label>
                <span class="form-control">{!! $asset->detail->assetPerformance->name !!}</span>
            </div>
            <div class="form-group ">
                <label>Performance Details</label>
                <span class="form-control">{!! $asset->detail->performance_detail !!}</span>
            </div>
        </div>
    </div>
</div>