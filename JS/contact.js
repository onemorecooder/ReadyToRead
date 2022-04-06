$(document).ready(function(){
    $("#contact_form").validate({
        rules:{
            firstname:{
                required: true,
                minlength: 2,
                maxlength: 25,
                pattern: "[A-z ]+",
            },
            lastname:{
                required: true,
                minlength: 2,
                maxlength: 25,
                pattern: "[A-z]+",
            },
            subject:{
                required: true
            }
        },
        messages:{
            firstname:{
                required: "Please enter your name<br>",
                minlength: "Name is too short<br>",
                maxlength: "Name is too long<br>",
                pattern: "Enter a valid name<br>"
            },
            lastname:{
                required: "Please enter your surname<br>",
                minlength: "Surname is too short<br>",
                maxlength: "Surname is too long<br>",
                pattern: "Enter a valid lastname<br>" 
            },
            subject:{
                required: "Please enter your message<br>"
            }
        },
        submitHandler: function (form) {
            /* SE "DESACTIVA" EL SUBMIT HASTA QUE LOS CAMPOS SEAN CORRECTOS */
            form.submit();
          }
    })
})