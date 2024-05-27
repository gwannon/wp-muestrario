var swiper = [];
swiper[0] = new Swiper(".mySwiper", {
  spaceBetween: 0,
});

jQuery('.mySwiper .mosaic > a').click(swiper,function(e){
  e.preventDefault();
  swiper[0].slideTo((jQuery(this).data("goto")));
});


jQuery('.muestra').click(function() {
  var bg = jQuery(this).css('background-image');
  bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
  jQuery("#popup").append("<img src='"+bg+"'>");
  if(jQuery(this).hasClass("haszoom")) {
    console.log(jQuery(this).data("full"));
    jQuery("#popup").css('background-image', 'url('+jQuery(this).data("full")+')');
  }
  jQuery("#popup").fadeIn();
  jQuery("#controls").fadeIn();
});

jQuery('#controls span.close').click(function() {
  jQuery("#popup").fadeOut();
  jQuery("#controls").fadeOut();
  jQuery('#popup img').remove(); 
  jQuery('#popup').removeClass("zoom"); 
  jQuery("#popup").css('background-image', 'none');
  jQuery('#popup').addClass("nozoom");
  jQuery('#controls').addClass("nozoom");
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

jQuery('.haszoom').click(function() {
  jQuery('#popup').removeClass("nozoom");
  jQuery('#controls').removeClass("nozoom");
});


//Draggable del popup en vez de tener que usar scroll
const slider = document.querySelector('#popup');
let isDown = false;
let startY;
let scrollTop;
slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startY = e.pageY - slider.offsetTop;
  scrollTop = slider.scrollTop;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const y = e.pageY - slider.offsetTop;
  const walk = (y - startY) * 3; //scroll-fast
  slider.scrollTop = scrollTop - walk;
  console.log(walk);
});
