$(function() {
    $("form[name='signupform']").validate({
        rules: {
            firstname: {
                required: true
                
            },
            lastname: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
            confirmpassword: {
                equalTo: "#password"
            }
        },
        messages: {
            firstname: {
                required: "This field is required"
            },
            lastname: {
                required: "This field is required"
            },
            email: {
                required: "This field is required",
                email: "Email address not valid"
            },
            password: {
                required: "This field is required"
            },
            confirmpassword: {
                equalTo: "Passwords must match"
            }
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});