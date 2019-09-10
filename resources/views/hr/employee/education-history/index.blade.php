<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            
            <div class="portlet-title">                    
                <div class="actions">
                    <a class="btn btn-xs sbold green" href="{!! url('hr/employee/educationhistory/add/'.$emp->id) !!}">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            
            <div class="portlet-body">
               
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="educationhistory">
                    <thead>
                    <tr>
                        <th class="text-center">Grade</th>
                        <th class="text-center">Place</th>
                        <th class="text-center">Score</th>
                        <th class="text-center">Start</th>
                        <th class="text-center">until</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
