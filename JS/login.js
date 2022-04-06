$(document).ready(function () {
/* LE PASAMOS EL ID DE NUESTRO FORMULARIO */
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
    },
    submitHandler: function (form) {
      /* SE "DESACTIVA" EL SUBMIT HASTA QUE LOS CAMPOS SEAN CORRECTOS */
      form.submit();
    }
  });
});


jQuery(document).ready(function($) {
  
  //check to see if the submited cookie is set, if not check if the popup has been closed, if not then display the popup
  if( getCookie('popupCookie') != 'submited'){ 
    if(getCookie('popupCookie') != 'closed' ){
      $('.popup-overlay').css("display", "block").hide().fadeIn();
    }
  }
  
  $('a.close').click(function(){
    // FADE OUT PARA QUE DESAPAREZCA CON ESTILO
    $('.popup-overlay').fadeOut();
    //SI EL POPUP SE PULSA EN CERRAR EL POPUP DESAPARECERÁ DURANTE 1 MINUTO
    setCookie( 'popupCookie', 'closed', .00069444444 );
  });
  
  $('a.submit').click(function(){
    // FADE OUT PARA QUE DESAPAREZCA CON ESTILO
    $('.popup-overlay').fadeOut();
    //SI SE PULSA EN SUBMIT DESAPARECERÁ DURANTE 5 MINUTOS
    setCookie( 'popupCookie', 'submited', .0034722222 );
  });

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
});