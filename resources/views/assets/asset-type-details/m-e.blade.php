<div class="row">
    <div class="asset-type-2">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="form-label col-md-12">Specification :</label>
                    <span class="col-md-12">{!! $assetDetail->specification !!}</span>
                </div>
                <div class="form-group row">
                    <label class="form-label col-md-12">Serial Number :</label>
                    <span class="col-md-12">{!! $assetDetail->serial_number !!}</span>
                </div>
                <div class="form-group row">
                    <label class="form-label col-md-12">Condition :</label>
                    <span class="col-md-12">{!! $assetDetail->assetCondition->name !!}</span>
                </div>
                <div class="form-group row">
                    <label class="form-label col-md-12">Condition Details :</label>
                    <span class="col-md-12">{!! $assetDetail->condition_detail !!}</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="form-label col-md-12">Function :</label>
                    <span class="col-md-12">{!! $assetDetail->function !!}</span>
                </div>
                <div class="form-group row">
                    <label class="form-label col-md-12">Install Date :</label>
                    <span class="col-md-12">{!! $assetDetail->install_date !!}</span>
                </div>
                <div class="form-group row">
                    <label class="form-label col-md-12">Performance :</label>
                    <span class="col-md-12">{!! $assetDetail->assetPerformance->name !!}</span>
                </div>
                <div class="form-group row">
                    <label class="form-label col-md-12">Performance Details :</label>
                    <span class="col-md-12">{!! $assetDetail->performance_detail !!}</span>
                </div>
            </div>
        </div>
    </div>
</div>