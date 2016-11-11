<div class="row">
    <div class="asset-type-2">
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Specification</label>
                <textarea class="form-control" name="specification">{!! $assetDetail->specification !!}</textarea>
            </div>
            <div class="form-group ">
                <label>Serial Number</label>
                <input type="text" name="serial_number" value="{!! $assetDetail->serial_number !!}" class="form-control">
            </div>
            <div class="form-group ">
                <label>Condition</label>
                {!! $condition !!}
            </div>
            <div class="form-group ">
                <label>Condition Details</label>
                <textarea class="form-control" name="condition_detail">{!! $assetDetail->condition_detail !!}</textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Function</label>
                <textarea class="form-control" name="function">{!! $assetDetail->function !!}</textarea>
            </div>
            <div class="form-group ">
                <label>Install Date</label>
                <input type="text" name="install_date" class="form-control date-picker" value="@if ($assetDetail->install_date != ''){!! Carbon\Carbon::createFromFormat('Y-m-d', $assetDetail->install_date)->format('m/d/Y') !!}@endif">
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