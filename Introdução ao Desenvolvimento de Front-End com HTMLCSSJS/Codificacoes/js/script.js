$(document).ready(function($) { 
	$('.scroll').on('click', function(){

			$('html, body').animate({
				"scrollTop" : $("header").offset().top
			}, 500);

	});
});