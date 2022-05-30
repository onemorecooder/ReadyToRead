jQuery(document).on('submit', '#second_form', function (event) {
  event.preventDefault();
  $('.alert label').slideUp('slow');
  var em = $('#em').val();
  var ps = $('#ps').val();

  $.ajax('credentials.php', {
    type: 'POST',  // http method
    data: { email: em, entrada: 'entrada', passwd: ps },
    beforeSend: function () {
      $('.button').val('Validating...');
    },
    success: function (data, status, xhr) {
      //console.log(data.errorEmail);
      data = JSON.parse(data);
      //console.log(data.passbbdd);//
      //console.log(data.passForm);//
      if (data.errorConn == true) {
        $('.alert label').css({ "background-color": "#DC143C", "color": "white" });
        //TIEMPO DE ESPERA PARA QUE EL "POP-UP" SUBA.
        setTimeout(function () {
          $('.button').val('Submit');
          $('.alert label').html('Connection error...');
          $('.alert label').slideDown('slow');
        }, 1000);
        console.log(data.texto);
      } else if (data.errorEmail == true) {
        console.log(data.texto);
        $('.alert label').css({ "background-color": "#DC143C", "color": "white" });
        //TIEMPO DE ESPERA PARA QUE EL "POP-UP" SUBA.
        setTimeout(function () {
          $('.button').val('Submit');
          $('.alert label').html('Incorrect email! Try again...');
          $('.alert label').slideDown('slow');
        }, 1000);
      } else if (data.errorPass == true) {
        console.log(data.texto);
        //TIEMPO DE ESPERA PARA QUE EL "POP-UP" SUBA.
        $('.alert label').css({ "background-color": "#DC143C", "color": "white" });
        setTimeout(function () {
          $('.button').val('Submit');
          $('.alert label').html('Incorrect password! Try again...');
          $('.alert label').slideDown('slow');
        }, 1000);
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