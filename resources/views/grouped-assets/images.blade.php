
{{--Repeater Start--}}
<div class="form-group mt-repeater">
    <div data-repeater-list="images">
        <div data-repeater-item class="mt-repeater-item">
            <div class="row mt-repeater-row">
                <div class="col-md-12">
                    <div class="form-group col-md-4">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                            <div>
                                <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="image">
                                </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-7">
                        <label class="control-label">Description</label>
                        <textarea class="form-control" name="image_description"></textarea>
                    </div>
                    <div class="col-md-1">
                        <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
            </div>
            {{--end of mt-repeater-row--}}

        </div>
    </div>
    <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
        <i class="fa fa-plus"></i> Add Image
    </a>
</div>
{{--End of repeater--}}