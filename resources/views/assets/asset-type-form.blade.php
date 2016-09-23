@if($assetType == 2)
    <div class="row">
        <div class="asset-type-2">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Specification</label>
                    <textarea class="form-control" name="specification"></textarea>
                </div>
                <div class="form-group ">
                    <label>Serial Number</label>
                    <input type="text" name="serial_number" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Install Date</label>
                    <input type="text" name="install_date" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Function</label>
                    <textarea class="form-control" name="function"></textarea>
                </div>
                <div class="form-group ">
                    <label>Condition</label>
                    {!! $condition !!}
                </div>
                <div class="form-group ">
                    <label>Performance</label>
                    {!! $performance !!}
                </div>
            </div>
        </div>
    </div>
@elseif($assetType == 3)
    <div class="row">
        <div class="asset-type-3">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Specification</label>
                    <textarea class="form-control" name="specification"></textarea>
                </div>
                <div class="form-group ">
                    <label>Serial Number</label>
                    <input type="text" name="serial_number" class="form-control">
                </div>
            </div>
        </div>
    </div>
@elseif($assetType == 4)
    <div class="row">
        <div class="asset-type-2">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Specification</label>
                    <textarea class="form-control" name="specification"></textarea>
                </div>
                <div class="form-group ">
                    <label>Contractor</label>
                    <input type="text" name="contractor" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Construction Date</label>
                    <input type="text" name="construction_date" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Function</label>
                    <textarea class="form-control" name="function"></textarea>
                </div>
                <div class="form-group ">
                    <label>Condition</label>
                    {!! $condition !!}
                </div>
                <div class="form-group ">
                    <label>Performance</label>
                    {!! $performance !!}
                </div>
            </div>
        </div>
    </div>
@endif