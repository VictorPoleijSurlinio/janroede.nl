$(function() {
	$('a[href*="#"]:not([href="#"])').click(function() {
		if ($(this).parent().hasClass('carousel')){
			return;
		}
		if ($(this).parent().parent().hasClass('carousel')){
			return;
		}
		// if ($(this).hasClass('nav-link')){
		// 	return;
		// }
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top-370
				}, 100);
				return false;
			}
		}
	});
	if($(location.href.split("#")[1])) {
		var target = $('#'+location.href.split("#")[1]);
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top-100 //offset height of header here too.
			}, 100);
			return false;
		}
	}
});
