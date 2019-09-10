<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Log;
use JildertMiedema\LaravelPlupload\Facades\Plupload;

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth', 'menu', 'site']], function () {

    Route::get('/dashboard' ,'HomeController@dashboard');

    Route::get( '/user', 'UserController@index' );
    Route::post( '/user', 'UserController@index' );
    Route::get( '/user/add', 'UserController@create' );
    Route::post( '/user/save', 'UserController@store' );
    Route::get( '/user/{id}/edit', 'UserController@edit' );
    Route::get( '/user/{id}/delete', 'UserController@destroy' );
    Route::post( '/user/{id}/update', 'UserController@update' );

    // Role
    Route::get('/role', 'RoleController@index')->name('role');
    Route::get('/role/add', 'RoleController@create')->name('role.add');
    Route::post('/role/save', 'RoleController@store')->name('role.add');
    Route::get('/role/{id}/edit', 'RoleController@edit')->name('role.edit');
    Route::post('/role/{id}/update', 'RoleController@update')->name('role.edit');
    Route::get('/role/{id}/delete', 'RoleController@destroy')->name('role.delete');

    // Permission
    Route::get('/permission', 'PermissionController@index')->name('permission');
    Route::get('/permission/add', 'PermissionController@create')->name('permission.add');
    Route::post('/permission/save', 'PermissionController@store')->name('permission.add');
    Route::get('/permission/{id}/edit', 'PermissionController@edit')->name('permission.edit');
    Route::post('/permission/{id}/update', 'PermissionController@update')->name('permission.edit');
    Route::get('/permission/{id}/delete', 'PermissionController@destroy')->name('permission.delete');

    Route::get('/user-profile/{id}', 'UserController@profile');
    Route::get('/user-profile/{id}/edit', 'UserController@editProfile');
    Route::post('/user-profile/{id}/update', 'UserController@updateProfile');
    Route::post('/user-profile/{id}/update-avatar', 'UserController@updateAvatar');
    Route::post('/user-profile/{id}/update-password', 'UserController@updatePassword');

    Route::get( '/site', 'SiteController@index' );
    Route::get( '/site/add', 'SiteController@create' );
    Route::post( '/site/save', 'SiteController@store' );
    Route::get( '/site/{id}/edit', 'SiteController@edit' );
    Route::post( '/site/{id}/update', 'SiteController@update' );
    Route::get( '/site/{id}/delete', 'SiteController@destroy' );

    Route::get( '/menu', 'MenuController@index' );
    Route::get( '/menu/add', 'MenuController@create' );
    Route::post( '/menu/save', 'MenuController@store' );
    Route::get( '/menu/{id}/edit', 'MenuController@edit' );
    Route::post( '/menu/{id}/update', 'MenuController@update' );
    Route::get( '/menu/{id}/delete', 'MenuController@destroy' );

    Route::get( '/gender', 'GenderController@index' );
    Route::get( '/gender/add', 'GenderController@create' );
    Route::post( '/gender/save', 'GenderController@store' );
    Route::get( '/gender/{id}/edit', 'GenderController@edit' );
    Route::post( '/gender/{id}/update', 'GenderController@update' );
    Route::get( '/gender/{id}/delete', 'GenderController@destroy' );

    Route::get( '/division', 'DivisionController@index' );
    Route::get( '/division/add', 'DivisionController@create' );
    Route::post( '/division/save', 'DivisionController@store' );
    Route::get( '/division/{id}/edit', 'DivisionController@edit' );
    Route::post( '/division/{id}/update', 'DivisionController@update' );
    Route::get( '/division/{id}/delete', 'DivisionController@destroy' );

    Route::get( '/religion', 'ReligionController@index' );
    Route::get( '/religion/add', 'ReligionController@create' );
    Route::post( '/religion/save', 'ReligionController@store' );
    Route::get( '/religion/{id}/edit', 'ReligionController@edit' );
    Route::post( '/religion/{id}/update', 'ReligionController@update' );
    Route::get( '/religion/{id}/delete', 'ReligionController@destroy' );

    Route::get( '/marital', 'MaritalStatusController@index' );
    Route::get( '/marital/add', 'MaritalStatusController@create' );
    Route::post( '/marital/save', 'MaritalStatusController@store' );
    Route::get( '/marital/{id}/edit', 'MaritalStatusController@edit' );
    Route::post( '/marital/{id}/update', 'MaritalStatusController@update' );
    Route::get( '/marital/{id}/delete', 'MaritalStatusController@destroy' );

    Route::get( '/position', 'PositionController@index' );
    Route::get( '/position/add', 'PositionController@create' );
    Route::post( '/position/save', 'PositionController@store' );
    Route::get( '/position/{id}/edit', 'PositionController@edit' );
    Route::post( '/position/{id}/update', 'PositionController@update' );
    Route::get( '/position/{id}/delete', 'PositionController@destroy' );

    Route::get( '/leavetype', 'LeavetypeController@index' );
    Route::get( '/leavetype/add', 'LeavetypeController@create' );
    Route::post( '/leavetype/save', 'LeavetypeController@store' );
    Route::get( '/leavetype/{id}/edit', 'LeavetypeController@edit' );
    Route::post( '/leavetype/{id}/update', 'LeavetypeController@update' );
    Route::get( '/leavetype/{id}/delete', 'LeavetypeController@destroy' );

    Route::get( '/education', 'EducationGradeController@index' );
    Route::get( '/education/add', 'EducationGradeController@create' );
    Route::post( '/education/save', 'EducationGradeController@store' );
    Route::get( '/education/{id}/edit', 'EducationGradeController@edit' );
    Route::post( '/education/{id}/update', 'EducationGradeController@update' );
    Route::get( '/education/{id}/delete', 'EducationGradeController@destroy' );

    Route::get( '/leaveperiod', 'LeavePeriodController@index' );
    Route::get( '/leaveperiod/add', 'LeavePeriodController@create' );
    Route::post( '/leaveperiod/save', 'LeavePeriodController@store' );
    Route::get( '/leaveperiod/{id}/edit', 'LeavePeriodController@edit' );
    Route::post( '/leaveperiod/{id}/update', 'LeavePeriodController@update' );
    Route::get( '/leaveperiod/{id}/delete', 'LeavePeriodController@destroy' );

    Route::get( '/leaveentitlement', 'LeaveEntitlementController@index' );
    Route::get( '/leaveentitlement/add', 'LeaveEntitlementController@create' );
    Route::post( '/leaveentitlement/save', 'LeaveEntitlementController@store' );
    Route::get( '/leaveentitlement/{id}/edit', 'LeaveEntitlementController@edit' );
    Route::post( '/leaveentitlement/{id}/update', 'LeaveEntitlementController@update' );
    Route::get( '/leaveentitlement/{id}/delete', 'LeaveEntitlementController@destroy' );

    Route::get( '/holiday', 'HolidayController@index' )->name('holiday.index');
    Route::post( '/holiday', 'HolidayController@store' )->name('holiday.store');

    Route::get( '/empstatus', 'EmploymentStatusController@index' );
    Route::get( '/empstatus/add', 'EmploymentStatusController@create' );
    Route::post( '/empstatus/save', 'EmploymentStatusController@store' );
    Route::get( '/empstatus/{id}/edit', 'EmploymentStatusController@edit' );
    Route::post( '/empstatus/{id}/update', 'EmploymentStatusController@update' );
    Route::get( '/empstatus/{id}/delete', 'EmploymentStatusController@destroy' );

    Route::get( '/workschedule', 'WorkScheduleController@index' );
    Route::get( '/workschedule/add', 'WorkScheduleController@create' );
    Route::post( '/workschedule/save', 'WorkScheduleController@store' );
    Route::get( '/workschedule/{id}/edit', 'WorkScheduleController@edit' );
    Route::post( '/workschedule/{id}/update', 'WorkScheduleController@update' );
    Route::get( '/workschedule/{id}/delete', 'WorkScheduleController@destroy' );

    Route::get( '/hr/recruitment', 'EmployeeController@recruitment' );
    Route::post( '/hr/recruitment/save', 'EmployeeController@storeRecruitment' );

    Route::get( '/hr/employee', 'EmployeeController@index' );
    Route::get( '/hr/employee/add', 'EmployeeController@recruitment' );
    //Route::post( '/hr/employee/save', 'EmployeeController@store' );
    Route::get( '/hr/employee/{id}/edit', 'EmployeeController@edit' );
    Route::post( '/hr/employee/{id}/update', 'EmployeeController@update' );
    Route::get( '/hr/employee/{id}/delete', 'EmployeeController@destroy' );
    Route::get('hr/employee/{id}/detail', 'EmployeeController@detail');
    //Route::get('hr/employee/{id}/detail', 'EmployeeController@detail']);

    Route::get( '/hr/leave/apply', 'LeaveController@apply' );
    
    Route::get( '/hr/employee/workhistory/add/{id}', 'EmployeeWorkHistoryController@create' );
    Route::post( '/hr/employee/workhistory/save', 'EmployeeWorkHistoryController@store' );
    Route::get( '/hr/employee/workhistory/{id}/edit', 'EmployeeWorkHistoryController@edit' );
    Route::post( '/hr/employee/workhistory/{id}/update', 'EmployeeWorkHistoryController@update' );
    Route::get( '/hr/employee/workhistory/{id}/delete', 'EmployeeWorkHistoryController@destroy' );

    Route::get( '/hr/employee/educationhistory/add/{id}', 'EmployeeEducationHistoryController@create' );
    Route::post( '/hr/employee/educationhistory/save', 'EmployeeEducationHistoryController@store' );
    Route::get( '/hr/employee/educationhistory/{id}/edit', 'EmployeeEducationHistoryController@edit' );
    Route::post( '/hr/employee/educationhistory/{id}/update', 'EmployeeEducationHistoryController@update' );
    Route::get( '/hr/employee/educationhistory/{id}/delete', 'EmployeeEducationHistoryController@destroy' );

    Route::get( '/hr/employee/traininghistory/add/{id}', 'EmployeeTrainingHistoryController@create' );
    Route::post( '/hr/employee/traininghistory/save', 'EmployeeTrainingHistoryController@store' );
    Route::get( '/hr/employee/traininghistory/{id}/edit', 'EmployeeTrainingHistoryController@edit' );
    Route::post( '/hr/employee/traininghistory/{id}/update', 'EmployeeTrainingHistoryController@update' );
    Route::get( '/hr/employee/traininghistory/{id}/delete', 'EmployeeTrainingHistoryController@destroy' );
});


Route::group(['middleware' => ['auth', 'site']], function () {
    Route::get( '/user-data', 'UserController@anyData')->name('user.data' );
    Route::get( '/permission-data', 'PermissionController@anyData')->name('permission.data' );
    Route::get( '/role-data', 'RoleController@anyData')->name('role.data' );    
    Route::get( '/site-data', 'SiteController@anyData')->name('site.data' );
    Route::get( '/menu-data', 'MenuController@anyData')->name('menu.data' );    
    Route::get( '/gender-data', 'GenderController@anyData')->name('gender.data' );
    Route::get( '/division-data', 'DivisionController@anyData')->name('division.data' );
    Route::get( '/religion-data', 'ReligionController@anyData')->name('religion.data' );
    Route::get( '/marital-data', 'MaritalStatusController@anyData')->name('marital.data' );
    Route::get( '/position-data', 'PositionController@anyData')->name('position.data' );
    Route::get( '/leavetype-data', 'LeavetypeController@anyData')->name('leavetype.data' );
    Route::get( '/leaveperiod-data', 'LeavePeriodController@anyData')->name('leaveperiod.data' );
    Route::get( '/leaveentitlement-data', 'LeaveEntitlementController@anyData')->name('leaveentitlement.data' );
    Route::get( '/empstatus-data', 'EmploymentStatusController@anyData')->name('empstatus.data' );
    Route::get( '/workschedule-data', 'WorkScheduleController@anyData')->name('workschedule.data' );
    Route::get( '/employee-data', 'EmployeeController@anyData')->name('employee.data' );
    Route::get( '/workhistory-data', 'EmployeeWorkHistoryController@anyData')->name('workhistory.data' );
    Route::get( '/education-data', 'EducationGradeController@anyData')->name('education.data' );
    Route::get( '/educationhistory-data', 'EmployeeEducationHistoryController@anyData')->name('educationhistory.data' );
    Route::get( '/traininghistory-data', 'EmployeeTrainingHistoryController@anyData')->name('traininghistory.data' );

    Route::post('/ajax/upload', 'AssetController@uploadImage');
    Route::post('ajax/get-leave-quota', 'LeavetypeController@getLeaveQuota');
    Route::post( '/ajax/get-employee', 'EmployeeController@getEmployee');
    Route::post( '/ajax/save-recruitment', 'EmployeeController@storeRecruitment');
});


