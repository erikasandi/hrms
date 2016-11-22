<div class="row">
    <div class="asset-type-2">
        <div class="col-md-6">
            <div class="form-group ">
                <label>Specification</label>
                <textarea class="form-control" name="specification">{!! $assetDetail->specification !!}</textarea>
            </div>
            <div class="form-group ">
                <label>Contractor</label>
                <input type="text" name="contractor" class="form-control" value="{!! $assetDetail->serial_number !!}">
            </div>
            <div class="form-group ">
                <label>Condition</label>
                {!! $condition !!}
            </div>
            <div class="form-group ">
                <label>Condition Details</label>
                <textarea class="form-control" name="condition_detail">{!! $assetDetail->condition_detail !!}</textarea>
            </div>
            <div class="form-group ">
                <label>Reservoir Capacity</label>
                <input type="text" name="reservoir_capacity" value="{!! $assetDetail->reservoir_capacity !!}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group ">
                <label>Function</label>
                <textarea class="form-control" name="function">{!! $assetDetail->function !!}</textarea>
            </div>
            <div class="form-group ">
                <label>Construction Date</label>
                <input type="text" name="construction_date" class="form-control date-picker" value="@if ($assetDetail->construction_date != ''){!! Carbon\Carbon::createFromFormat('Y-m-d', $assetDetail->construction_date)->format('m/d/Y') !!}@endif">
            </div>
            <div class="form-group ">
                <label>Performance</label>
                {!! $performance !!}
            </div>
            <div class="form-group ">
                <label>Performance Details</label>
                <textarea class="form-control" name="performance_detail">{!! $assetDetail->performance_detail !!}</textarea>
            </div>
        </div>
    </div>
</div>