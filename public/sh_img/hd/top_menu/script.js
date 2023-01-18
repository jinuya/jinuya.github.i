// top_menu
$(document).ready(function() {	
	$('#top_nav li').hover(function() {
		$('ul', this).stop().slideDown(300);
	}, function() {
		$('ul', this).stop().slideUp(100);
	});
});