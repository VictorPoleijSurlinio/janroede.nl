$(document).ready(function(){
	$('.obfuscate').click(function() {
		var email = $(this).data('mail');
		var domain = $(this).data('domain');
		$(this).attr("href", "mailto:" + email + "@" + domain);
	});
});