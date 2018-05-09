$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 100) {
      $(".navbar").css("background" , "rgba(0,0,0,0.8)");
    }

    else{
      $(".navbar").css("background" , "transparent");   
    }
  })
})

new WOW().init();