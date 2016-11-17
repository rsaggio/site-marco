$(document).ready(function(){
	$('.hamburguer-menu').click(function(){
		$(this).toggleClass('open');
		$(this).toggleClass('fixed');
		$('.menu-cover').toggleClass('menu-cover-hidden');
	});
});
