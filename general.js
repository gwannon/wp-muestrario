var swiper = [];
swiper[0] = new Swiper(".mySwiper", {
  spaceBetween: 0,
});

jQuery('.mySwiper .mosaic > a').click(function(e){
  e.preventDefault();
  swiper[0].slideTo((jQuery(this).data("goto")));
});


jQuery('.muestra').click(function() {
  var bg = jQuery(this).css('background-image');
  bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
  jQuery("#popup").css('background-image', 'url('+bg+')');
  jQuery("#popup").append("<img src='"+bg+"'>");
  jQuery("#popup").fadeIn();
  jQuery("#controls").fadeIn();
});

jQuery('#controls span.close').click(function() {
  jQuery("#popup").fadeOut();
  jQuery("#controls").fadeOut();
  jQuery('#popup img').remove(); 
  jQuery('#popup').removeClass("zoom"); 
  jQuery("#popup").css('background-image', 'none');
});

jQuery('#controls span.zoom.in').click(function() {
  jQuery('#popup').removeClass("zoom"); 
});

jQuery('#controls span.zoom.out').click(function() {
  jQuery('#popup').addClass("zoom"); 
});

jQuery('#returnhome').click(swiper,function(){
  for (var i = 0; i <= swiper.length; i++ ) {
    if(swiper[i] != undefined) swiper[i].slideTo(0);
  }
});



