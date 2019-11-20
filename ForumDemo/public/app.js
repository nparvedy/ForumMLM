$(document).ready(function(){
     $(".active").click(function(){
          $(".serachbox").toggle();

     });

});

$(document).ready(function(){
    $('.sendButton').prop('disabled',true);
    $('#message').keyup(function(){
        $('.sendButton').prop('disabled', this.value == "" ? true : false);
    })
});


$(document).ready(function(){
     $(".inprof").prop('disabled',true);
     $(".fa-pen-square").click(function(){
          $(".inprof").prop('disabled', this.value == "" ? true : false);
          $("#upload").css('visibility','visible');
          $(".profiledit").css('visibility','visible');
          $(".canceledit").css('visibility','visible');
     });
});

$(".message-succes").fadeIn(1000).delay(5000).fadeOut(1000);
