$(document).ready(function(){

// Validation mail
  var valid = true;

  function removeSpan() {
      $("#mail").children("span").remove();
  }
  
  function validMail() {
           var mail = $("#email").val();
           var div = $("#mail");
           if (mail.length == 0) {
            $("<span>Veuillez renseigner votre email</span>").appendTo(div);
            valid = false
           }
  }
  
      $("#email").focus(function() {
          removeSpan();
      })
     
      $("button").click(function(event) {
          event.preventDefault();
          removeSpan();
          validMail();
          if(valid) {
              $("form").submit();
          }
      })

      $("#scrollAuto").click(function() {
        $("html, body").animate({scrollTop : 0}, 500);
        $(this).fadeOut();
    })

});

// Scroll
$(window).scroll(function() {
    $("#scrollAuto").fadeIn();
})