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
                            <i class="icon-user font-dark"></i>
                            <span class="caption-subject bold uppercase"> Add Menu</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('menu') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form role="form" action="{!! url('menu/save') !!}" method="post" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{!! old('name') !!}" autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">{!! $errors->first('name') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group  @if ($errors->has('display')) has-error @endif">
                                            <label>Display</label>
                                            <input type="text" name="display" class="form-control" placeholder="Display Name" value="{!! old('display') !!}">
                                            @if ($errors->has('display'))
                                                <span class="help-block">{!! $errors->first('display') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group  @if ($errors->has('link')) has-error @endif">
                                            <label>Link</label>
                                            <input type="text" name="link" class="form-control" placeholder="Link" value="{!! old('link') !!}">
                                            @if ($errors->has('link'))
                                                <span class="help-block">{!! $errors->first('link') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group  @if ($errors->has('parent')) has-error @endif">
                                            <label>Parent</label>
                                            {{ $parent }}
                                            @if ($errors->has('parent'))
                                                <span class="help-block">{!! $errors->first('parent') !!}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group  @if ($errors->has('permission')) has-error @endif">
                                            <label>Permission</label>
                                            {{ $permission }}
                                            @if ($errors->has('link'))
                                                <span class="help-block">{!! $errors->first('permission') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group  @if ($errors->has('icon_class')) has-error @endif">
                                            <label>Icon</label>
                                            <input type="text" name="icon_class" class="form-control" placeholder="Icon" value="{!! old('icon_class') !!}">
                                            @if ($errors->has('icon_class'))
                                                <span class="help-block">{!! $errors->first('icon_class') !!}</span>
                                            @endif
                                        </div>
                                        <div class="form-group  @if ($errors->has('order')) has-error @endif">
                                            <label>Order</label>
                                            <input type="text" name="order" class="form-control" placeholder="Order" value="{!! old('order') !!}">
                                            @if ($errors->has('order'))
                                                <span class="help-block">{!! $errors->first('order') !!}</span>
                                            @endif
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