<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Acuatico Internal Application | Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{!! asset('metronic/assets/global/css/components-rounded.min.css') !!}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{!! asset('metronic/assets/global/css/plugins.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{!! asset('metronic/assets/pages/css/login-3.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    {{--<a href="index.html"> <img src="metronic/assets/pages/img/acuatico.png" alt="" /> </a>--}}
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{!! url('/login') !!}" method="post">
        {!! csrf_field() !!}
        <h3 class="form-title">Login to your account</h3>

        <!--div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter your username and password. </span>
        </div-->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                @if ($errors->has('name'))
                    <span> {{ $errors->first('name') }} </span>
                @endif
                @if ($errors->has('password'))
                    <span> {{ $errors->first('password') }} </span>
                @endif
            </div>
        @endif

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="name" autofocus /> </div>
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
        </div>

        <div class="form-actions">
            <!--
            <label class="rememberme mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="remember" value="1" /> Remember me
                <span></span>
            </label>
            -->
            <label>
                <span></span>
            </label>
            <button type="submit" class="btn green pull-right"> Login </button>
        </div>
        <!--
        <div class="forget-password">
            <h4>Forgot your password ?</h4>
            <p> no worries, click
                <a href="javascript:;" id="forget-password"> here </a> to reset your password. </p>
        </div>
        -->
    </form>
    <!-- END LOGIN FORM -->

    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="index.html" method="post">
        <h3>Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn grey-salsa btn-outline"> Back </button>
            <button type="submit" class="btn green pull-right"> Submit </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->

</div>
<!-- END LOGIN -->
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
<script src="{!! asset('metronic/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('metronic/assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{!! asset('metronic/assets/global/scripts/app.min.js') !!}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{!! asset('metronic/assets/pages/scripts/login.min.js') !!}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>