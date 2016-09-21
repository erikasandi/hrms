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
                            <span class="caption-subject bold uppercase"> Edit Asset Location</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('asset-location') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form role="form" method="post" action="{!! url('asset-location/' . $location->id . '/update') !!}" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" name="name" class="form-control" placeholder="Location" value="{!! $location->name !!}" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" placeholder="Description">{!! $location->description !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Parent</label>
                                            {!! $parent !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
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