jQuery(document).ready(function($) {
  
    //check to see if the submited cookie is set, if not check if the popup has been closed, if not then display the popup
    if(getCookie('popupCookie') != 'submited'){ 
      if(getCookie('popupCookie') != 'closed' ){
        $('.popup-overlay').css("display", "block").hide().fadeIn();
      }
    }
    
    $('a.close').click(function(){
      $('.popup-overlay').fadeOut();
      //sets the coookie to one minute if the popup is closed (whole numbers = days)
      setCookie( 'popupCookie', 'closed', .00069444444 );
    });
    
    $('a.submit').click(function(){
      $('.popup-overlay').fadeOut();
      //sets the coookie to five minutes if the popup is submited (whole numbers = days)
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