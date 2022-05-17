jQuery(document).on('submit', '#second_form', function (event) {
  event.preventDefault();

  var em = $('#em').val();
  var ps = $('#ps').val();

  $.ajax('credentials.php', {
    type: 'POST',  // http method
    data: { email: em, entrada: 'entrada', passwd: ps },
    beforeSend: function(){
      $('.button').val('Validating...');
    },
    success: function (data, status, xhr) {
      data = JSON.parse(data);
      
      console.log(data);
      if (data.error) {
        console.log(data.texto);
        $('.button').val('Submit');
        $('.alert label').css({"background-color":"#DC143C", "color":"white"});
        $('.alert label').html('Incorrect credentials! Try again...');
        $('.alert label').slideDown('slow');
        setTimeout(function(){
          $('.alert label').slideUp('slow');
        },3000)

      } else {
        console.log(data.texto);
        if (data.rol == 'admin') {
          location.href = 'admin.php';
        } else {
          location.href = 'inicio.php';
        }
      }
    },
    error: function (jqXhr, textStatus, errorMessage) {
      console.log(errorMessage);

    }
  });
});

$(document).ready(function () {
  $('form[id="second_form"]').validate({
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
      /* CONTRASEÑA */
      passwd: {
        /* CAMPO OBLIGATORIO */
        required: true,
        /* LONGITUD MÍNIMA */
        minlength: 8,
      }
    },
    /* A CONTINUACIÓN, DESPUÉS DE LAS REGLAS PASAMOS A DARLE 
    LOS MENSAJES QUE QUEREMOS QUE SALGAN UNA VEZ EL USUARIO SE
    EQUIVOQUE */
    messages: {
      /* EMAIL */
      email: {
        /* PARA EL ERROR DE LA LONGITUD */
        minlength: 'Email must be at least 8 characters long',
        /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
        required: 'Email is required',
        /* PARA EL ERROR DEL EMAIL */
        email: 'Enter a valid email',
      },
      /* CONTRASEÑA */
      passwd: {
        /* PARA EL ERROR DE LA LONGITUD */
        minlength: 'Password must be at least 8 characters long',
        /* PARA EL ERROR DEL CAMPO OBLIGATORIO */
        required: 'Password is required',
      }
    }
  });
});