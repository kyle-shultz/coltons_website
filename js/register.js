$(function (){
    var $registerForm = $("#register");

    $.validator.addMethod("noSpace", function(value, element){
        return value == '' || value.trim().length != 0;
    }, "Spaces are not allowed. Please enter a valid name!");

    $.validator.addMethod("pwcheck", function(value) {
        re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        return  re.test(value);
     }); 

    if ($registerForm.length){
        $registerForm.validate({
            rules:{
                firstname:{
                    required: true,
                    lettersonly: true,
                    noSpace: true
                },
                lastname:{
                    required: true,
                    noSpace: true
                },
                register_email:{
                    required: true,
                    lettersonly: true,
                    email: true
                },
                password:{
                    required: true,
                    pwcheck: true
                }
            },
            messages: {
                firstname:{
                    required: 'First name is required.',
                    lettersonly: 'First name can only contain letters.'
                },
                lastname:{
                    required: 'Last name is required.',
                    lettersonly: 'Last name can only contain letters.'
                },
                register_email:{
                    required: 'Email is required.',
                    email: 'Please enter valid email!'
                },
                password:{
                    required: 'Password is required.',
                    pwcheck: 'Password should be at least 8 characters in length include one upper case letter, one number, and one special character.' 
                }
            }
        })
    }
})