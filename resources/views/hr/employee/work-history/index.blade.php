<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
        	
            <div class="portlet-title">                    
                <div class="actions">
                    <a class="btn btn-xs sbold green" href="{!! url('hr/employee/workhistory/add/'.$emp->id) !!}">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
           
            <div class="portlet-body">
                
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="workhistory"> 
                    <thead>
                    <tr>
                        <th class="text-center">Company</th>
                        <th class="text-center">Position</th>
                        <th class="text-center">Start</th>
                        <th class="text-center">Until</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
