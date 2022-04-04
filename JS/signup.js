$(document).ready(function () {
  /* LE PASAMOS EL ID DE NUESTRO FORMULARIO */
  $('form[id="signup_form"]').validate({
    /* CON EL "." VALIDATE LO QUE HACEMOS ES LLAMAR AL 
    PLUGIN, SOBRE ÉL MARCAREMOS UNAS REGLAS, TANTO PARA EL 
    EMAIL COMO PARA LA CONTRASEÑA. */
    rules: {
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
        /* PARA EL ERROR DE CARÁCTERES SOLO TEXTO */
        pattern: 'Name can only contain letters (minimum 3)',
        /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
        required: 'Name is required',
      },
      surname: {
        /* PARA EL ERROR DE CARÁCTERES SOLO TEXTO */
        pattern: 'Last name can only contain letters (minimum 3)',
        /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
        required: 'Last name is required',
      },
      /* EMAIL */
      email: {
        /* PARA EL ERROR DE LA LONGITUD */
        minlength: 'Email must be at least 8 characters long',
        /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
        required: 'Email is required',
        /* PARA EL ERROR DEL EMAIL */
        email: 'Enter a valid email',
      },

      /* EMAIL CONFIRM */
      email_conf: {
        /* PARA EL ERROR DE LA LONGITUD */
        minlength: 'Email must be at least 8 characters long',
        /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
        required: 'Email is required',
        /* PARA EL ERROR DEL EMAIL */
        email: 'Enter a valid email',
      },
      /* CONTRASEÑA */
      passwd: {
        /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
        required: 'Password is required',
        /* PARA EL PATTERN */
        pattern: 'Password must contain a capital letter, numbers, special character and 8 characters long',
      },

      /* CONTRASEÑA CONFIRM */
      passwd_conf: {
        /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
        required: 'Password is required',
        /* PARA EL PATTERN */
        pattern: 'Password must contain a capital letter, numbers, special character and 8 characters long',
      }

    },
    submitHandler: function (form) {
      /* SE "DESACTIVA" EL SUBMIT HASTA QUE LOS CAMPOS SEAN CORRECTOS */
      form.submit();
    }
  });
});