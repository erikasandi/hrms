@extends('layouts.metronic.asset')

@section('page-level-styles')
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
                            <span class="caption-subject bold uppercase"> Add Division</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('division') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form role="form" method="post" action="{!! url('division/save') !!}" >
                            {{ csrf_field() }}
                            <input type="hidden" name="site_id" value="{!! session('gSite') !!}">
                            <div class="form-body">
                                <div class="row">
                                    @if ($errors->has('site_id'))
                                        <div class="alert alert-danger alert-dismissable col-md-12">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <strong>Error!</strong> {!! $errors->first('site_id') !!}
                                        </div>
                                    @endif
                                    <div class="col-lg-6">                                        
                                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">{!! $errors->first('name') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                                        </div>                    
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm sbold green">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
@endsection

@section('page-level-scripts')
@endsection