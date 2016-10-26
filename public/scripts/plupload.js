var uploader = new plupload.Uploader({
    browse_button : document.getElementById('tab_images_uploader_pickfiles'), // you can pass in id...
    container: document.getElementById('tab_images_uploader_container'), // ... or DOM Element itself
    url: ajaxUrl + '/upload',
    headers: {
        'X-CSRF-TOKEN': csrfToken
    },
    init: {
        PostInit: function() {
            $('#tab_images_uploader_filelist').html("");

            $('#tab_images_uploader_uploadfiles').click(function() {
                uploader.start();
                return false;
            });

            $('#tab_images_uploader_filelist').on('click', '.added-files .remove', function(){
                uploader.removeFile($(this).parent('.added-files').attr("id"));
                $(this).parent('.added-files').remove();
            });
        },

        FilesAdded: function(up, files) {
            plupload.each(files, function(file) {
                $('#tab_images_uploader_filelist').append('<div class="alert alert-warning added-files" id="uploaded_file_' + file.id + '">' + file.name + '(' + plupload.formatSize(file.size) + ') <span class="status label label-info"></span>&nbsp;<a href="javascript:;" style="margin-top:-5px" class="remove pull-right btn btn-sm red"><i class="fa fa-times"></i> remove</a></div>');
            });
        },

        UploadProgress: function(up, file) {
            $('#uploaded_file_' + file.id + ' > .status').html(file.percent + '%');
        },

        FileUploaded: function(up, file, response) {
            var response = $.parseJSON(response.response);
            console.log(response);
            if (response.result.status && response.result.status == 'OK') {
                var id = response.id; // uploaded file's unique name. Here you can collect uploaded file names and submit an jax request to your server side script to process the uploaded files and update the images tabke
                var inputFile = "<input type='hidden' name='asset_images[]' value='" + response.result.path + "'>";
                $('#uploaded_file_' + file.id + ' > .status').removeClass("label-info").addClass("label-success").html('<i class="fa fa-check"></i> Done'); // set successfull upload
                $('#tab_images_uploader_container').append(inputFile);
            } else {
                $('#uploaded_file_' + file.id + ' > .status').removeClass("label-info").addClass("label-danger").html('<i class="fa fa-warning"></i> Failed'); // set failed upload

                App.alert({type: 'danger', message: 'One of uploads failed. Please retry.', closeInSeconds: 10, icon: 'warning'});
            }
        },

        Error: function(up, err) {
            App.alert({type: 'danger', message: err.message, closeInSeconds: 10, icon: 'warning'});
        }
    }
});

uploader.init();