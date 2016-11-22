<div class="row">
    <div class="asset-type-2">
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Contract</label>
                <textarea class="form-control" name="contract"></textarea>
            </div>
            <div class="form-group ">
                <label>Location</label>
                <input type="text" name="location" class="form-control">
            </div>
            <div class="form-group ">
                <label>Location 2</label>
                <input type="text" name="location_2" class="form-control">
            </div>
            <div class="form-group ">
                <label>Contractor</label>
                <input type="text" name="contractor" class="form-control">
            </div>
            <div class="form-group ">
                <label>Operational Date</label>
                <input type="text" name="operational_date" class="form-control date-picker">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Length per Pipe Diameter</label>
                <input type="text" name="length_per_pipe_diameter" class="form-control">
            </div>
            <div class="form-group ">
                <label>Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group ">
                <label>Condition</label>
                {!! $condition !!}
            </div>
            <div class="form-group ">
                <label>Condition Detail</label>
                <textarea class="form-control" name="condition_detail"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label>Number of Pipe</label>
                        <input type="text" name="number_of_pipe" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label>Number of Valve</label>
                        <input type="text" name="number_of_valve" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label>Number of Pipe Bridge</label>
                        <input type="text" name="number_of_pipe_bridge" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>