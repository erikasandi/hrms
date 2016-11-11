<div class="row">
    <div class="asset-type-2">
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Contract</label>
                <textarea class="form-control" name="contract">{!! $assetDetail->contract !!}</textarea>
            </div>
            <div class="form-group ">
                <label>Contractor</label>
                <input type="text" name="contractor" value="{!! $assetDetail->contractor !!}" class="form-control">
            </div>
            <div class="form-group ">
                <label>Pipe Diameter</label>
                <input type="text" name="pipe_diameter" class="form-control" value="{!! $assetDetail->pipe_diameter !!}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Description</label>
                <textarea class="form-control" name="description">{!! $assetDetail->description !!}</textarea>
            </div>
            <div class="form-group ">
                <label>Operational Date</label>
                <input type="text" name="operational_date" value="@if ($assetDetail->operational_date != ''){!! Carbon\Carbon::createFromFormat('Y-m-d', $assetDetail->operational_date)->format('m/d/Y') !!}@endif" class="form-control date-picker">
            </div>
            <div class="form-group ">
                <label>Network Diameter</label>
                <input type="text" name="network_diameter" value="{!! $assetDetail->network_diameter !!}" class="form-control">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group ">
                <label>Number of Valve</label>
                <input type="text" name="number_of_valve" value="{!! $assetDetail->number_of_valve !!}" class="form-control">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group ">
                <label>Length</label>
                <input type="text" name="length" value="{!! $assetDetail->length !!}" class="form-control">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group ">
                <label>Number of Pipe Bridge</label>
                <input type="text" name="number_of_pipe_bridge" value="{!! $assetDetail->number_of_pipe_bridge !!}" class="form-control">
            </div>
        </div>
    </div>
</div>