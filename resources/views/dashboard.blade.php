@extends('layouts.metronic.asset')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">

    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <!-- BEGIN PAGE BAR -->
        <!-- END PAGE BAR -->

        <!-- BEGIN PAGE TITLE-->
        {{--<h1 class="page-title"> Blank Page Layout</h1>--}}
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                {{--<div class="portlet light bordered">--}}
                    {{--<div class="portlet-title">--}}
                        {{--<div class="caption">--}}
                            {{--<span class="caption-subject bold uppercase font-dark">Asset Management</span>--}}
                            {{--<span class="caption-helper">asset management application</span>--}}
                        {{--</div>--}}
                        {{--<div class="actions">--}}
                            {{--<a class="btn btn-circle btn-icon-only btn-default" href="#">--}}
                                {{--<i class="icon-cloud-upload"></i>--}}
                            {{--</a>--}}
                            {{--<a class="btn btn-circle btn-icon-only btn-default" href="#">--}}
                                {{--<i class="icon-wrench"></i>--}}
                            {{--</a>--}}
                            {{--<a class="btn btn-circle btn-icon-only btn-default" href="#">--}}
                                {{--<i class="icon-trash"></i>--}}
                            {{--</a>--}}
                            {{--<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"> </a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="portlet-body">--}}
                        {{----}}
                    {{--</div>--}}
                {{--</div>--}}
                <img src="{!! asset('images/original/cover.png') !!}">
            </div>
        </div>
        <!-- END PAGE TITLE-->

        <!-- END PAGE HEADER-->

        {{--<div class="note note-info">--}}
            {{--<p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>--}}
        {{--</div>--}}
    </div>
    <!-- END CONTENT BODY -->

</div>
<!-- END CONTENT -->
@endsection