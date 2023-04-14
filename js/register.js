$(function (){
    $.validator.addMethod("noSpace", function(value, element){
        return value == '' || value.trim().length != 0;
    }, "Spaces are not allowed. Please enter a valid name!");

    $.validator.addMethod("pwcheck", function(value) {
        re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        return  re.test(value);
     }); 

     var $registerForm = $("#register_form");
     $registerForm.submit(function (e){
            e.preventDefault();
     }).validate({
            rules:{
                firstname:{
                    required: true,
                    noSpace: true
                },
                lastname:{
                    required: true,
                    noSpace: true
                },
                register_email:{
                    required: true,
                    email: true
                },
                password:{
                    required: true,
                    pwcheck: true
                }
            },
            messages:{
                firstname:{
                    required: 'First name is required.',
                },
                lastname:{
                    required: 'Last name is required.',
                },
                register_email:{
                    required: 'Email is required.',
                    email: 'Please enter valid email!'
                },
                password:{
                    required: 'Password is required.',
                    pwcheck: 'Password should be at least 8 characters in length include one upper case letter, one number, and one special character.' 
                }
            },
            submitHandler: function(form){
                form.submit();
            }
        });

        // $registerForm.submit(function (e){
        
        //     if ($registerForm.valid()){
        //         window.location.replace("register_handler.php")
        //     } else {
        //         e.preventDefault();
        //     }
        // });
});