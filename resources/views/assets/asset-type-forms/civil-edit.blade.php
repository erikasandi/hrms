<div class="row">
    <div class="asset-type-2">
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Specification</label>
                <textarea class="form-control" name="specification">{!! $assetDetail->specification !!}</textarea>
            </div>
            <div class="form-group ">
                <label>Contractor</label>
                <input type="text" name="contractor" class="form-control" value="{!! $assetDetail->contractor !!}">
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
                <label>Construction Date</label>
                <input type="text" name="construction_date" class="form-control date-picker" value="{!! $assetDetail->construction_date !!}">
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