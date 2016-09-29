@extends('layouts.metronic.asset')

@section('page-level-styles')
<link href="{!! asset('metronic/assets/pages/css/profile.min.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">

    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <!-- BEGIN PAGE BAR -->
        <!-- END PAGE BAR -->

        <!-- BEGIN PAGE TITLE-->
        {{--<h1 class="page-title"> User Profile--}}
            {{--<small></small>--}}
        {{--</h1>--}}
        <!-- END PAGE TITLE-->

        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet ">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="{!! asset('uploads/avatars/' . $user->userDetail->avatar) !!}" class="img-responsive" alt=""> </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {!! $user->name !!} </div>
                            <!-- div class="profile-usertitle-job"> Developer </div -->
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <!-- div class="profile-userbuttons">
                            <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                            <button type="button" class="btn btn-circle red btn-sm">Message</button>
                        </div -->
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="{!! url('user-profile/' . $user->id) !!}">
                                        <i class="icon-home"></i> Overview </a>
                                </li>
                                <li>
                                    <a href="{!! url('user-profile/' . $user->id . '/edit') !!}">
                                        <i class="icon-settings"></i> Account Settings </a>
                                </li>
                                <!--li>
                                    <a href="page_user_profile_1_help.html">
                                        <i class="icon-info"></i> Help </a>
                                </li-->
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                    <!-- END PORTLET MAIN -->
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
            </div>
        </div>
    </div>
</div>
@endsection