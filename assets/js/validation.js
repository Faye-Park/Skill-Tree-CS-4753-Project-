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
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zipcode: {
                required: true,
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
            address: {
                required: "This field is required"
            },
            city: {
                required: "This field is required"
            },
            state: {
                required: "This field is required"
            },
            zipcode: {
                required: "This field is required"
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
