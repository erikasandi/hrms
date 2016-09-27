<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Acuatico Internal Application</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    @section('page-level-styles')
    @show
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{!! asset('metronic/assets/global/css/components-rounded.min.css') !!}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{!! asset('metronic/assets/global/css/plugins.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{!! asset('metronic/assets/layouts/layout/css/layout.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/layouts/layout/css/themes/darkblue.min.css') !!}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{!! asset('metronic/assets/layouts/layout/css/custom.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    @include('layouts.metronic.header')

    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        @include('layouts.metronic.sidebar')

        @yield('content')

    </div>
    <!-- END CONTAINER -->
    @include('layouts.metronic.footer')
</div>

<!--[if lt IE 9]>
<script src="{!! asset('metronic/assets/global/plugins/respond.min.js') !!}"></script>
<script src="{!! asset('metronic/assets/global/plugins/excanvas.min.js') !!}"></script>
<script src="{!! asset('metronic/assets/global/plugins/ie8.fix.min.js') !!}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{!! asset('metronic/assets/global/plugins/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/global/plugins/js.cookie.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/global/plugins/jquery.blockui.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page-level-plugins')
@show
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{!! asset('metronic/assets/global/scripts/app.min.js') !!}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@section('page-level-scripts')
@show
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{!! asset('metronic/assets/layouts/layout/scripts/layout.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/layouts/layout/scripts/demo.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/layouts/global/scripts/quick-sidebar.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/layouts/global/scripts/quick-nav.min.js') !!}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>