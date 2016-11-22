<div class="row">
    <div class="asset-type-2">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group row ">
                    <label class="form-label col-md-12">Contract :</label>
                    <span class="col-md-12">{!! $asset->detail->contract !!}</span>
                </div>
                <div class="form-group row ">
                    <label class="form-label col-md-12">Location :</label>
                    <span class="col-md-12">{!! $asset->detail->location !!}</span>
                </div>
                <div class="form-group row ">
                    <label class="form-label col-md-12">Location 2 :</label>
                    <span class="col-md-12">{!! $asset->detail->location_2 !!}</span>
                </div>
                <div class="form-group row ">
                    <label class="form-label col-md-12">Contractor :</label>
                    <span class="col-md-12">{!! $asset->detail->contractor !!}</span>
                </div>
                <div class="form-group row ">
                    <label class="form-label col-md-12">Operational Date :</label>
                    <span class="col-md-12">@if ($asset->detail->operational_date != '') {!! Carbon\Carbon::createFromFormat('Y-m-d', $asset->detail->operational_date)->format('m/d/Y') !!} @endif</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row ">
                    <label class="form-label col-md-12">Length per Pipe Diameter :</label>
                    <span class="col-md-12">{!! $asset->detail->length_per_pipe_diameter !!}</span>
                </div>
                <div class="form-group row ">
                    <label class="form-label col-md-12">Description :</label>
                    <span class="col-md-12">{!! $asset->detail->description !!}</span>
                </div>
                <div class="form-group row ">
                    <label class="form-label col-md-12">Condition :</label>
                    <span class="col-md-12">{!! $asset->detail->condition !!}</span>
                </div>
                <div class="form-group row ">
                    <label class="form-label col-md-12">Condition Detail :</label>
                    <span class="col-md-12">{!! $asset->detail->condition_detail !!}</span>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="form-group row ">
                    <label class="form-label col-md-12">Number of Pipe :</label>
                    <span class="col-md-12">{!! $asset->detail->number_of_pipe !!}</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row ">
                    <label class="form-label col-md-12">Number of Valve :</label>
                    <span class="col-md-12">{!! $asset->detail->number_of_valve !!}</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row ">
                    <label class="form-label col-md-12">Number of Pipe Bridge :</label>
                    <span class="col-md-12">{!! $asset->detail->number_of_pipe_bridge !!}</span>
                </div>
            </div>
        </div>
    </div>
</div>