<div class="row">
    <div class="asset-type-2">
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Contract</label>
                <span class="form-control">{!! $asset->detail->contract !!}</span>
            </div>
            <div class="form-group ">
                <label>Contractor</label>
                <span class="form-control">{!! $asset->detail->contractor !!}</span>
            </div>
            <div class="form-group ">
                <label>Pipe Diameter</label>
                <span class="form-control">{!! $asset->detail->pipe_diameter !!}</span>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group ">
                <label>Description</label>
                <span class="form-control">{!! $asset->detail->description !!}</span>
            </div>
            <div class="form-group ">
                <label>Operational Date</label>
                <span class="form-control">@if ($asset->detail->operational_date != '') {!! Carbon\Carbon::createFromFormat('Y-m-d', $asset->detail->operational_date)->format('m/d/Y') !!} @endif</span>
            </div>
            <div class="form-group ">
                <label>Network Diameter</label>
                <span class="form-control">{!! $asset->detail->network_diameter !!}</span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group ">
                <label>Number of Valve</label>
                <span class="form-control">{!! $asset->detail->number_of_valve !!}</span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group ">
                <label>Length</label>
                <span class="form-control">{!! $asset->detail->length !!}</span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group ">
                <label>Number of Pipe Bridge</label>
                <span class="form-control">{!! $asset->detail->number_of_pipe_bridge !!}</span>
            </div>
        </div>
    </div>
</div>