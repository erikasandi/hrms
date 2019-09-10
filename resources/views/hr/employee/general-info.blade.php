<form class="form-horizontal">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="col-sm-4 control-label text-left">NPWP</label>
            <div class="col-sm-8"><p class="form-control-static">{{ $emp->npwp_number }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jamsostek</label>
            <div class="col-sm-8"><p class="form-control-static">{{ $emp->jamsostek_number }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Sex</label>
            <div class="col-sm-8"><p class="form-control-static">{{ $emp->employeeGender->name }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Marital Status</label>
            <div class="col-sm-8"><p class="form-control-static">{{ $emp->employeemaritalStatus->marital->name }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Religion</label>
            <div class="col-sm-8"><p class="form-control-static">@if ($emp->employeeReligion->religion_id != '') {{ $emp->employeeReligion->religion->name }} @else {{'---'}} @endif</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Birth Detail</label>
            <div class="col-sm-8"><p class="form-control-static">@if ($emp->place_of_birth != '') {{ $emp->place_of_birth }}, @endif {{ $emp->date_of_birth }} </p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Address</label>
            <div class="col-sm-8"><p class="form-control-static">{!! $emp->employeeAddress->address !!}</p></div>
        </div> 
    </div>
    <div class="col-lg-6 ">
        <div class="form-group">
            <label class="col-sm-5 control-label">Phone</label>
            <div class="col-sm-7"><p class="form-control-static">{{ $emp->phone }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Email</label>
            <div class="col-sm-7"><p class="form-control-static">{{ $emp->email }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Phone (other)</label>
            <div class="col-sm-7"><p class="form-control-static">{{ $emp->phone_other }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Email (other)</label>
            <div class="col-sm-7"><p class="form-control-static">{{ $emp->email_other }}</p></div>
        </div> 
        <div class="form-group">
            <label class="col-sm-5 control-label">Employment Status</label>
            <div class="col-sm-7"><p class="form-control-static">{{ $emp->employeeStatus->name }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Superior</label>
            <div class="col-sm-7"><p class="form-control-static">{{ $emp->employeeSuperior->superior->firstname }}</p></div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Date of Join</label>
            <div class="col-sm-7"><p class="form-control-static">{{ $emp->join_date }}</p></div>
        </div>                                            
    </div>
</form>