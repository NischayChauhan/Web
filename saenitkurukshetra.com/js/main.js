 /*
  **********************************************************
  * OPAQUE NAVBAR SCRIPT
  **********************************************************
  */

  // Toggle tranparent navbar when the user scrolls the page
  /*animation of css for animation*/
  $(window).scroll(function() {
    $(".divHiddenAnim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
       $(this).addClass("divNotHiddenAnim");
     }
   });
  });
  $(window).scroll(function() {
    $(".divSlideRightAnim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
       $(this).addClass("divNotSlideRightAnim");
     }
   });
  });
  $(window).scroll(function() {
    $(".divSlideLeftAnim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
       $(this).addClass("divNotSlideLeftAnim");
     }
   });
  });
  $(window).scroll(function() {
    $(".divrubberAnim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
       $(this).addClass("divNotrubberAnim");
     }
   });
  });
  $(window).scroll(function() {
    $(".divflipInY").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
       $(this).addClass("divNotflipInY");
     }
   });
  });
  /*animation of css for animation*/
  /* gallery between */

$(document).ready(function(){
    $("#icon_1").mouseover(function(){
        $("#icon_1").css("opacity", "1.0");
    });
    $("#icon_1").mouseout(function(){
        $("#icon_1").css("opacity", "0.1");
    });
});

$(document).ready(function(){
    $("#icon_2").mouseover(function(){
        $("#icon_2").css("opacity", "1.0");
    });
    $("#icon_2").mouseout(function(){
        $("#icon_2").css("opacity", "0.1");
    });
});

var options = {"particles":{"number":{"value":99,"density":{"enable":true,"value_area":5522.4033491425909}},"color":{"value":"#FBFFFE"},"shape":{"type":"image","stroke":{"width":0,"color":"#0D1321"},"polygon":{"nb_sides":3},"image":{"src":"images/data/images.png","width":70,"height":70}},"opacity":{"value":0.5,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":10,"random":true,"anim":{"enable":true,"speed":2,"size_min":0.3,"sync":true}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1.5782952832645452,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true};
particlesJS("particle", options);