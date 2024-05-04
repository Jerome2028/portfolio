$(function() {
$('.contact').on('submit', function(e){
    e.preventDefault();
    var error = false;
    var message = '';

    var email = $('#email').val();
    var conemail = $('#cemail').val();
    
    var captchaa = $(this).find('input[name=captchaa]').val();
    var captcha = $(this).find('input[name=captcha]').val();
    var inputss = $(this).find('input[type=text]').val();
    if ((email =="")||(conemail == "") || (email != conemail)) {
       error =true;
       message = 'Email not match';
    }
    if (captcha != captchaa){
        error = true;
        message = 'captcha not match!'
    }
    if (inputss == "") {
        error = true;
        message = 'Empty Field';
    }
    if (error) {
        Toastify({
          text: message,
          duration: 3000,
          newWindow: true,
          close: true,
          gravity: "top",
          positionRight: true,
          backgroundColor: "#c46868"
        }).showToast();
      return;
      }
    //   $("body").css({
    //     opacity: "0.5",
    //     cursor: "wait"
    // });
    var formData = new FormData(this);
    var action = $(this).attr('action');

      $.ajax ({
        type:'POST',
        url:action,
        data:formData,
        datatype: "JSON",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
            $("input , button").prop("disabled", true);
            $("body").css({
                transition: "all 0.5s",
                opacity: "0.5",
                cursor: "wait"
            });
        },
     
        success:function(data){
        window.onbeforeunload = null;
        var responseVal = JSON.parse(data);
        console.log(data);
        if (responseVal["message"] == "Sent Succesfully") {
          setTimeout(function() {
            Toastify({
              text: "Succesfully Sent!",
              duration: 3000,
              newWindow: true,
              close: true,
              gravity: "top",
              positionRight: true,
              backgroundColor: "#14a44d"
            }).showToast();
            $("body").css({
              opacity: "1",
              cursor: "default"
          });
          $("input , button").prop("disabled", false).val("");
        },3000);


        
          setTimeout(function() {
            window.location.href="/inmed-corp/thank-you/";
          },5000);

        }
        else {
            alert('failed');
        }
        }
    });
});
});