@if($assetType == 2)
    @include('assets.asset-type-forms.m-e-edit')
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
    @include('assets.asset-type-forms.civil-edit')
@elseif($assetType == 6)
    @include('assets.asset-type-forms.network-pipe-edit')
@endif