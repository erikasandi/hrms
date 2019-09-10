<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function apply()
    {
    	/*
        $empId = \Auth::user()->employee_id;
        $leaveEntitlements = LeaveEntitlement::where('employee_id', $empId)->lists('leave_type_id');
        // print_r($leaveEntitlements); exit;
        // $typeRecords = LeaveType::all(['id', 'type']);
        $typeRecords = LeaveType::whereIn('id', $leaveEntitlements)->get();
        $types = [];
        foreach ($typeRecords as $record) {
            $types[$record->id] = $record->type;
        }
        $data['cbType'] = \Form::select('type', $types, '', ['id' => 'type', 'class' => 'form-control chosen']);

		
		*/
        $data['period'] = '';
        $data['note'] = '';
        $data['msg'] = \Session::get('message', '');
        $data['panelTitle'] = '<strong>Apply Leave</strong> Form';
        $data['act'] = 'add';
        
        //return view('leave.apply', $data);
        return view('hr.leave.apply', $data);
    }
}
