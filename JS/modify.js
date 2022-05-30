jQuery(document).on('submit', '#modify_form', function(event) {

    event.preventDefault();

    var name = $("[name = 'name']").val();
    var surname = $("[name = 'surname']").val();
    var fecha_nac = $("[name = 'fecha_nac']").val();
    var email = $("[name = 'email']").val();

    $.ajax('bbddmodify.php', {
        beforeSend: function() {
            $('.button').val('Saving...');
        },
        type: "POST",
        data: { name: name, surname: surname, fecha_nac: fecha_nac, email: email },

        success: function(respJSON) {
            console.log(respJSON);
            if (respJSON == "noexit") {
                console.log("error on the update");
                window.alert("Couldn't modify the data.");
                location.href = 'perfil.php';
            } else {
                console.log("exit!");
                window.alert("The data has been modified!");
                console.log(respJSON);
                location.href = 'perfil.php';
            }
            $('.button').val('SAVE');
        },
        error: function() {
            window.alert("Connection error.")
            location.href = 'login.php';
        }
    });
});
$(document).ready(function() {
    $('form[id="modify_form"]').validate({
        /* CON EL "." VALIDATE LO QUE HACEMOS ES LLAMAR AL 
        PLUGIN, SOBRE ÉL MARCAREMOS UNAS REGLAS, TANTO PARA EL 
        EMAIL COMO PARA LA CONTRASEÑA. */
        rules: {
            /* NOMBRE */
            name: {
                required: true,
                pattern: "[A-z]+",
            },
            surname: {
                required: true,
                pattern: "[A-z]+",
            },
            date: {
                required: true,
            },
            /* EMAIL */
            email: {
                /* OBLIGAMOS A QUE EL CAMPO SEA REQUIRED */
                required: true,
                /* LE OBLIGAMOS A QUE SEA FORMATO EMAIL */
                email: true,
                /* LE OBLIGAMOS A QUE TENGA UNA LONGITUD MÍNIMA */
                minlength: 8,
            },
        },
        /* A CONTINUACIÓN, DESPUÉS DE LAS REGLAS PASAMOS A DARLE 
        LOS MENSAJES QUE QUEREMOS QUE SALGAN UNA VEZ EL USUARIO SE
        EQUIVOQUE */
        messages: {

            name: {
                /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
                required: 'Name is required',
                /* PARA EL ERROR DE LA EXPRESIÓN REGULAR */
                pattern: 'Enter a valid name',
            },

            surname: {
                required: 'Surname is required',
                pattern: 'Enter a valid surname',
            },

            date: {
                required: 'Date is required',
            },

            email: {
                /* PARA EL ERROR DE LA LONGITUD */
                minlength: 'Email must be at least 8 characters long',
                required: 'Email is required',
                /* PARA EL ERROR DEL EMAIL */
                email: 'Enter a valid email',
            },
        }
    });
});