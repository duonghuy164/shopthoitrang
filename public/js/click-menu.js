// document.addEventListener("DOMContentLoaded",function(){
// 	var clickLi = document.querySelectorAll('.hover-cusor');
// 	console.log(clickLi);
// 	var showUl = document.querySelectorAll('.hiddenUl');
// 	console.log(showUl);
// 	clickLi.onclick=function(){

// 		showUl[0].classList.remove('showUl');
// 	}
// });
// $('.hover-cusor').click(function(){
// 	alert('hihi');
// });
$('.hover-cusor').click(function(){
      $('ul.hiddenUl ').toggleClass("showUl");
});
$(".menu-drop-left div").click(function() {
            $(".ul-hihi-left").slideToggle();
            $(".sub-ul-drop-left").css("display", "none");
      });

      $(".ul-hihi-left li").click(function() {
            $(".sub-ul-drop-left").slideUp();
            $(this).find('.sub-ul-drop-left').slideToggle();
      });

      $(window).resize(function() {
            if($(window).width() > 768) {
                  $(".ul-hihi-left").removeAttr('style');
            }
 });

$(".menu-drop-right div").click(function() {
    $(".ul-hihi-right").slideToggle();
});


$(window).resize(function() {
    if($(window).width() > 768) {
          $(".ul-hihi").removeAttr('style');
    }
});

