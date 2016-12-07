<div class="row">
    <div class="asset-type-2">
        <div class="col-md-6">
            <div class="form-group ">
                <label>Specification</label>
                <textarea class="form-control" name="specification"></textarea>
            </div>
            <div class="form-group ">
                <label>Brand</label>
                <input type="text" name="brand" class="form-control">
            </div>
            <div class="form-group ">
                <label>Serial Number</label>
                <input type="text" name="serial_number" class="form-control">
            </div>
            <div class="form-group ">
                <label>Condition</label>
                {!! $condition !!}
            </div>
            <div class="form-group ">
                <label>Condition Details</label>
                <textarea class="form-control" name="condition_detail"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group ">
                <label>Function</label>
                <textarea class="form-control" name="function"></textarea>
            </div>
            <div class="form-group ">
                <label>Install Date</label>
                <input type="text" name="install_date" class="form-control date-picker">
            </div>
            <div class="form-group ">
                <label>Performance</label>
                {!! $performance !!}
            </div>
            <div class="form-group ">
                <label>Performance Details</label>
                <textarea class="form-control" name="performance_detail"></textarea>
            </div>
            <div class="form-group ">
                <label>Reservoir Capacity</label>
                <input type="text" name="reservoir_capacity" class="form-control">
            </div>
        </div>
    </div>
</div>