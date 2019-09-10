var demoFormWizard = function() {
    return {
        init: function() {
            $("#stepy").stepy({
                backLabel: "Previous Step",
                nextLabel: "Next Step",
                errorImage: true,
                block: true,
                validate: true
            });
            $('#stepy').validate({
                errorPlacement: function(error) {
                    $('#stepy .stepy-errors').append(error);
                },
                rules: {
                    // 'code': 'required',
                    'firstname': 'required',
                    // 'phone': 'required',
                    'email': {required: true, email: true},
                    // 'date_of_birth': {required: true},
                    // 'join_date': { required: true}
                },
                messages: {
                    // 'code': {
                    //     required: 'Code is required!'
                    // },
                    'firstname': {
                        required: 'Firstname is required!'
                    },
                    // 'phone': {
                    //     required: 'Phone is required!'
                    // },
                    'email': {
                        required: 'Email address is required!'
                    },
                    // 'date_of_birth': {
                    //     required: 'Date of Birth is required!'
                    // },
                    // 'join_date': {
                    //     required: 'Email address is required!'
                    // }
                }
            });
        }
    };
}();
$(function() {
    "use strict";
    demoFormWizard.init();
});
