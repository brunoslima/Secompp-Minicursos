$(document).ready(function(){

	var executaRolagem = true;

	var offset = $("#container").offset().top;
	$(document).on('scroll', function(){

		if(offset <= $(window).scrollTop()) $("#container").addClass("fixar");
		else $("#container").removeClass("fixar");
	});

	$(document).on('scroll', function(){

		var deslocamento = $(document).height() - $(window).scrollTop();

		if(deslocamento <= 970) $("#gotop").fadeIn();
		else $("#gotop").fadeOut();
	});

	$('#gotop').on('click', function(){

		$('html, body').animate({
			"scrollTop" : $("header").offset().top
		}, 500);
	});

	$("li[class*='item']").on('click', function(event){

		event.preventDefault();

		var classe = $(this).attr("class");
		if(executaRolagem){
		
			var id = "#" + $('a', this).attr("href");

			var deslocamento = $(id).offset().top - 100;

			$("html, body").animate({
				"scrollTop": deslocamento
			}, 500);

			if(classe == "sublist-item") executaRolagem = false;
		}

		if(classe == "list-item") executaRolagem = true;
	});

	$(".list-item").hover(
		function(){
			$(".menu", this).slideToggle(500);
		},
		function(){
			$(".menu", this).slideToggle(100);
		}
	);

	$(".menu > .sublist-item").hover(
		function(){
			$(".sub-menu", this).slideToggle(500);
		},
		function(){
			$(".sub-menu", this).slideToggle(100);
		}
	);


});