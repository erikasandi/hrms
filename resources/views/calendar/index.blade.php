@extends('layouts.metronic.asset')

@section('page-level-styles')
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.css"> 
    <link href="{!! asset('metronic/assets/global/plugins/datatables/jquery.dataTables.min.css') !!}" rel="stylesheet" type="text/css" />
@endsection

    @section('content')
            <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">

        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="fa fa-building-o font-dark"></i>
                                <span class="caption-subject bold uppercase"> CALENDAR HOLIDAYS</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            @if (session('message'))
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <strong>Info!</strong> {{ session('message') }}
                            </div>
                            @endif
                            {!! Form::open(array('route' => 'holiday.store','method'=>'POST','files'=>'true')) !!}
                            {{ Form::hidden('class', 'bg-primary') }}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @elseif (Session::has('warning'))
                                        <div class="alert alert-danger">{{ Session::get('warning') }}</div>
                                    @endif
                                </div>                                
                                <div class="col-xs-3 col-sm-3 col-md-3">                                    
                                    <div class="form-group">
                                        {!! Form::label('title','Title Name :') !!}
                                        <div class="">
                                            {!! Form::text('title',null,['class' => 'form-control']) !!}
                                            {!! $errors->first('title', '<p class="alert alert-danger">:message</p>') !!}
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        {!! Form::label('started_at','Start Date:') !!}
                                        <div class="">
                                            {!! Form::date('started_at',null,['class' => 'form-control']) !!}
                                            {!! $errors->first('started_at', '<p class="alert alert-danger">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        {!! Form::label('ended_at','End Date:') !!}
                                        <div class="">
                                            {!! Form::date('ended_at',null,['class' => 'form-control']) !!}
                                            {!! $errors->first('ended_at', '<p class="alert alert-danger">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        {!! Form::label('description','Description:') !!}
                                        <div class="">
                                            {!! Form::text('description',null,['class' => 'form-control']) !!}
                                            {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-1 col-md-1">
                                    <div class="form-group">
                                        {!! Form::label('is_off','Is Off:',1) !!}
                                        <div class=""> 
                                            {!! Form::hidden('is_off',0) !!}
                                            {!! Form::checkbox('is_off',1,false) !!}
                                            <!--{!! Form::checkbox('is_off',null,['class' => 'form-control']) !!}-->
                                        </div>    
                                    </div>                                    
                                </div>

                                <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                                    {!! Form::submit('Add Holiday',['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">MY Holiday Details</div>
                            <div class="panel-body">
                                {!! $calendar_details->calendar() !!}
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->

    </div>
    <!-- END CONTENT -->
@endsection

@section('page-level-plugins')    
    <script src="{!! asset('metronic/assets/global/plugins/bootbox/bootbox.min.js') !!}" type="text/javascript"></script>

    <script src="{!! asset('metronic/assets/global/plugins/datatables/jquery.dataTables.min.js') !!}" type="text/javascript" ></script>
    <script src="{!! asset('metronic/assets/global/plugins/calendar/moment.min.js') !!} " type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.js" type="text/javascript"></script>
@endsection

@section('page-level-scripts')
    {!! $calendar_details->script() !!}   
@endsection