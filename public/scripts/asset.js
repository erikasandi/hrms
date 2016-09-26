$('#asset-type').on('change', function() {
    var assetType = $(this).val();
    var assetUrl = assetFormUrl + '/' + assetType;
    $.ajax(
        {
            url: assetUrl,
            type: "get",
            datatype: "html",
            beforeSend: function()
            {
                App.blockUI({
                    target: '#form-detail',
                    animate: true
                });
            }
        })
        .done(function(data)
        {
            console.log(data);
            $('#form-detail').empty().html(data);
            $('.date-picker').datepicker({
                orientation: "left",
                autoclose: true
            });
            App.unblockUI('#form-detail');

            //$('#ajax-loading').hide();
            //$("#projects").empty().html(data.html);
        })

    //$('#form-detail').empty();
    //$('#form-detail').add(assetDetail);
});
