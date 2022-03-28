$(document).ready(function(){
    $(".downarrow").click(function(){
        $(this).siblings(".feedback").slideToggle("300");
        $(this).siblings(".feedback").css({"display":"flex"})
        if ($(this).data("state")) {
            $(this).data("state", 0);
            $(this).css({"background-color":"#f4f1ea"});
          } else {
            $(this).data('state', 1);
            $(this).css({"background-color":"#DDD6C7"});
          }
    });
});