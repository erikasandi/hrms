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
                            @if ($act == 'edit')
                                <span><i>edit</i> &nbsp;<b>Education History Form</b></span>                            
                            @else 
                                <span><i>add</i> &nbsp;<b>Education History Form</b></span>
                            @endif
                        </div>
                        <div class="actions">
                            <a class="btn btn-xs sbold green" href="{!! url('hr/employee/'.$employee_id.'/detail#education-history') !!}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form role="form" method="post" action="{!! $save !!}" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Grade</label>
                                            {{ $grade }}
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Place</label>
                                            <input data-parsley-required="true" type="text" class="form-control" name="place" placeholder="Enter Place" value="{{ $place }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Description</label>
                                            <textarea name="description" class="form-control" rows="4" placeholder="Enter Description">{{ $description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Start</label>
                                            <input type="date" class="form-control dpicker" name="started_at" placeholder="Enter Start Date" value="{{ $started_at }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Until</label>
                                            <input type="date" name="ended_at" class="form-control" placeholder="Enter End Date" value="{{ $ended_at }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Score</label>
                                            <input type="text" class="form-control" name="score" placeholder="Enter Score" value="{{ $score }}" >
                                        </div>
                                    </div>
                                    {!! Form::hidden('act', $act) !!}
                                    {!! Form::hidden('employee_id', $employee_id) !!}
                                    @if ($act == 'edit')
                                        {!! Form::hidden('id', $id) !!}
                                    @endif                                                            
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm sbold green">Save</button>
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
<script src="{{ asset('metronic/assets/global/plugins/parsley/parsley.min.js') }}"></script>         
@endsection

@section('page-level-scripts')    
<script type="text/javascript">
    $('.parsley-form').parsley();
</script>
@endsection

