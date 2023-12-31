(function($) {
	"use strict";

	setTimeout(function(){
		var heightWin = $(window).innerHeight();
		var nav = $(".navigation").innerHeight();
		var heightMain = $(".main-content").innerHeight();
		if(heightMain<nav){
			$(".main-menu").css("height",heightWin);
		} else{
			$(".main-menu").css("height","100%");
		}
	}, 1000);

	
	$( ".navigation .menu li" ).hover(
		function() {
			var heightWindow = $(window).innerHeight();
			var subNav = $(this).find('.sub-menu').innerHeight() + 48
			var heightNav = $( this ).offset().top + subNav;
			if(heightWindow < heightNav) {
				$(this).find('.sub-menu').addClass('dropup');
			}
		}, function() {
			$(this).find('.sub-menu').removeClass('dropup');
		}
		);

})(jQuery);