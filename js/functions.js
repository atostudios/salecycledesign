
jQuery(document).ready(function($){

//off canvas menu

$('.burger').click(function(){
  $('.burger span:nth-child(2)').toggleClass('transparent');
  $('.burger span:nth-child(1)').toggleClass('rotate-top');
  $('.burger span:nth-child(3)').toggleClass('rotate-bottom');
  $('.navbar').toggleClass('nav-active');
  $('.burger').toggleClass('burger-close');
});


//menu background
$(window).scroll(function(){ 

var a = 300;
var pos = $(window).scrollTop();
if(pos > a) {
    $(".burger").css({
                background: '#000'
            });
}
else {
    $(".burger").css({
                background: 'none'
            });
}
});



//template box flip

  $(document).ready(function(){
    // set up hover panels
    // although this can be done without JavaScript, we've attached these events
    // because it causes the hover to be triggered when the element is tapped on a touch device
    $('.box').hover(function(){
      $(this).addClass('flip');
    },function(){
      $(this).removeClass('flip');
    });
  });

var standard = $('standard');
var travel = $('travel');
var hotel = $('hotel');
var airline = $('airline');
var travelagent = $('travelagent');

// if (standard.val() === 'standard') {
//   $('tr').css('display', 'none');
//   $('tr.standardplaceholder').css('display', 'block');
// } else if (travel.val() === 'travel') {
//   $('tr').css('display', 'none');
//   $('tr.travel').css('display', 'block');
// } else if (hotel.val() === 'hotel') {
//   $('tr').css('display', 'none');
//   $('tr.hotel').css('display', 'block');
// } else if (airline.val() === 'airline') {
//   $('tr').css('display', 'none');
//   $('tr.airline').css('display', 'block');
// } else if (travelagent.val() === 'travelagent') {
//   $('tr').css('display', 'none');
//   $('tr.travelagent').css('display', 'block');
// }

$("input:radio[name=option]").click(function(){

  var value = '.' + $(this).val();

  $('tr').css('display', 'none');
  $(value).css('display', 'table');

});




})

