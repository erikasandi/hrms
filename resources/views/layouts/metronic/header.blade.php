<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{!! url('dashboard') !!}">
                <img src="{!! asset('metronic/assets/layouts/layout/img/logo-aat-bw.png') !!}" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->

                {{--@if (count($gUserSites) > 1)--}}
                {{--<li class="dropdown dropdown-user">--}}
                    {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                        {{--<span class="username username-hide-on-mobile"> {!! session('gSiteName') !!} </span>--}}
                        {{--<i class="fa fa-angle-down"></i>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu dropdown-menu-default">--}}
                        {{--<li><a href="{!! $gCurrentUrl . '?gSite=0' !!}">All Sites</a></li>--}}
                        {{--@foreach($gUserSites as $site)--}}
                        {{--<li><a href="{!! $gCurrentUrl . '?gSite=' . $site->id !!}">{!! $site->name !!}</a></li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--@endif--}}
                {{--<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">--}}
                    {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                        {{--<i class="icon-bell"></i>--}}
                        {{--<span class="badge badge-default"> 7 </span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li class="external">--}}
                            {{--<h3>--}}
                                {{--<span class="bold">12 pending</span> notifications</h3>--}}
                            {{--<a href="page_user_profile_1.html">view all</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<ul class="dropdown-menu-list scroller" style="height: 200px;" data-handle-color="#637283">--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:;">--}}
                                        {{--<span class="time">just now</span>--}}
                                                    {{--<span class="details">--}}
                                                        {{--<span class="label label-sm label-icon label-success">--}}
                                                            {{--<i class="fa fa-plus"></i>--}}
                                                        {{--</span> New user registered. </span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:;">--}}
                                        {{--<span class="time">3 mins</span>--}}
                                                    {{--<span class="details">--}}
                                                        {{--<span class="label label-sm label-icon label-danger">--}}
                                                            {{--<i class="fa fa-bolt"></i>--}}
                                                        {{--</span> Server #12 overloaded. </span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<!-- END NOTIFICATION DROPDOWN -->--}}
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                {{--<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">--}}
                    {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                        {{--<i class="icon-envelope-open"></i>--}}
                        {{--<span class="badge badge-default"> 4 </span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li class="external">--}}
                            {{--<h3>You have--}}
                                {{--<span class="bold">7 New</span> Messages</h3>--}}
                            {{--<a href="javascript:;">view all</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<ul class="dropdown-menu-list scroller" style="height: 200px;" data-handle-color="#637283">--}}
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<span class="photo">--}}
                                            {{--<img src="" class="img-circle" alt="">--}}
                                        {{--</span>--}}
                                        {{--<span class="subject">--}}
                                            {{--<span class="from"> Lisa Wong </span>--}}
                                            {{--<span class="time">Just Now </span>--}}
                                        {{--</span>--}}
                                        {{--<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<span class="photo">--}}
                                            {{--<img src="" class="img-circle" alt="">--}}
                                        {{--</span>--}}
                                        {{--<span class="subject">--}}
                                            {{--<span class="from"> Richard Doe </span>--}}
                                            {{--<span class="time">16 mins </span>--}}
                                        {{--</span>--}}
                                        {{--<span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- END INBOX DROPDOWN -->

                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="@if(isset($gUser->userDetail->avatar)){!! url('uploads/avatars/' . $gUser->userDetail->avatar) !!}@else{!! asset('images/avatar.jpg') !!}@endif" />
                        <span class="username username-hide-on-mobile"> {!! $gUser->name !!} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{!! url('user-profile/' . auth()->user()->id) !!}">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        {{--<li>--}}
                            {{--<a href="app_inbox.html">--}}
                                {{--<i class="icon-envelope-open"></i> My Inbox--}}
                                {{--<span class="badge badge-danger"> 3 </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li class="divider"> </li>
                        <li>
                            <a href="{!! url('logout') !!}">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <!-- li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li -->
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->