/*
Below method was taken from StackOverflow. Although, there are limited
ways to implement the method, so I just used it as is.
*/

$.validator.addMethod(
    "regex",
    function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },
);

/*$.validator.addMethod("valueNotEquals", function(value, element, arg){
    return arg !== value;
    },
"Value must not equal arg."
);*/

$(function() {
    $("form[name='signupform']").validate({
        rules: {
            firstname: {
                required: true,
                regex: "^[a-zA-Z][a-zA-Z\-\. ]*$"
            },
            lastname: {
                required: true,
                regex: "^[a-zA-Z][a-zA-Z\-\. ]*$"
            },
            email: {
                required: true,
                email: true
            },
            address: {
                required: true,
                regex: "^[a-zA-Z0-9\-\. ]*$"
            },
            city: {
                required: true,
                regex: "^[a-zA-Z][a-zA-Z\-\. ]*$"
            },
            state: {
                required: true
            },
            zipcode: {
                required: true,
                digits: true,
                minlength: 5,
                maxlength: 5
            },
            password: {
                required: true,
                minlength: 5
            },
            confirmpassword: {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            firstname: {
                required: "This field is required",
                regex: "Enter valid characters (alphabet, -, ., and spaces)"
            },
            lastname: {
                required: "This field is required",
                regex: "Enter valid characters (alphabet, -, ., and spaces)"
            },
            email: {
                required: "This field is required",
                email: "Email address not valid"
            },
            address: {
                required: "This field is required",
                regex: "Enter valid characters (alphabet, numbers -, ., and spaces)"
            },
            city: {
                required: "This field is required",
                regex: "Enter valid characters (alphabet, -, ., and spaces)"
            },
            state: {
                required: "This field is required"
            },
            zipcode: {
                required: "This field is required",
                digits: "Enter digits only",
                minlength: "Must be 5 digits long",
                maxlength: "Must be 5 digits long"
            },
            password: {
                required: "This field is required",
                minlength: "Password must be at least 5 characters long"
            },
            confirmpassword: {
                required: "This field is required",
                equalTo: "Passwords must match"
            }
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});
