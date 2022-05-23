$(document).ready(function () {
    $("#contact_form").validate({
        rules: {
            firstname: {
                required: true,
                minlength: 2,
                maxlength: 25,
                pattern: "[A-z ]+",
            },
            lastname: {
                required: true,
                minlength: 2,
                maxlength: 25,
                pattern: "[A-z]+",
            },
            mail: {
                required: true,
                email: true,
                minlength: 8,
            },
            message: {
                required: true
            }
        },
        errorPlacement: function (error, element) {
            $("#message_error").html("Fill the red fields with a valid values")
            $("#message_error").css({ "display": "flex", "background-color": "#fc8d8d" });
        },
        submitHandler: function (form) {
            $.ajax({
                beforeSend: function(){
                    $("#fname").attr("disabled","disabled");
                    $("#lname").attr("disabled","disabled");
                    $("#mail").attr("disabled","disabled");
                    $("#subject").attr("disabled","disabled");
                    $("#message").attr("disabled","disabled");
                    $("#message_error").css({ "display": "flex", "background-color": "#fcf172" });
                    $("#message_error").html("")
                    var spinner = new Spinner({ // Se genera un nuevo objeto de carega
                        length: 3, // Logitud de cada linea 
                        width: 3, // Grosor de las lineas
                        radius: 7, // El radio del circulo interno
                    }).spin(document.getElementById("message_error")); // spin(elemento a aplicar (target));
                },
                url: "response.php", // Le paso la URL donde se van a manejar los datos que recibe "data"
                type: "POST", // El tipo de METODO que se utiliza para enviar los datos. En este caso no se muestran
                data: $('#contact_form').serialize(), // Recibe todos los datos del formulario guardandola en una cadena de texto
                success: function (data) { // Se establece una conexion
                   
                    if(data == "Exito"){
                        $("#message_error").css({ "display": "flex", "background-color": "lightgreen" });
                        $("#message_error").html("Thank you reader, your message has been received");
                        $("#fname").removeAttr("disabled");
                        $("#lname").removeAttr("disabled");
                        $("#mail").removeAttr("disabled");
                        $("#subject").removeAttr("disabled");
                        $("#message").removeAttr("disabled");
                        setTimeout(function(){
                            location = "inicio.php";
                        }, 2500
                        )
                    }
                    if(data == "Error"){
                    $("#message_error").css({ "display": "flex", "background-color":  "#fc8d8d" });
                    $("#message_error").html("A problem has ocurried");
                    $("#fname").removeAttr("disabled");
                    $("#lname").removeAttr("disabled");
                    $("#mail").removeAttr("disabled");
                    $("#subject").removeAttr("disabled");
                    $("#message").removeAttr("disabled");
                    }
                },
                error: function () { // Error de conexion
                    $("#message_error").css({ "display": "flex", "background-color":  "#fc8d8d" });
                    $('#message_error').html("A problem has occuried, please try again later<br>");
                },
            })
        }
    })
})
