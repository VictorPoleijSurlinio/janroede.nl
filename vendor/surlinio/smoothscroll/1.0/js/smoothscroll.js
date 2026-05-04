$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top-80
              }, 1000);
                return false;
            }
        }
    });
    //Executed on page load with URL containing an anchor tag.
  if($(location.href.split("#")[1])) {
      var target = $('#'+location.href.split("#")[1]);
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top //offset height of header here too.
        }, 100);
        return false;
      }
    }
});