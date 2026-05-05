
// @prepros-prepend "../../../packages/jquery/3.6.0/min/jquery.min.js"
// @prepros-prepend "../../../packages/bootstrap/5.1.3/js/bootstrap.bundle.min.js"
// @prepros-prepend "../../../packages/lightbox/2.10.0/js/lightbox.min.js"
//@prepros-prepend "../../vendor/surlinio/smoothscroll/1.1/js/smoothscroll.js"
// @prepros-prepend "../../../packages/masonry/4.2.2/js/masonry.pkgd.min.js"
// @prepros-prepend "../../../packages/imagesloaded/4.1.4/js/imagesloaded.pkgd.min.js"
// @prepros-prepend "../../../packages/aos/2.0/js/aos.js"



// MASONRY
if($('.masonry-div').length >0 ){
    var grid = document.querySelector('.masonry-div');
    var msnry;
    var gridItems = grid.children;

    imagesLoaded(grid, function(){
        msnry = new Masonry( grid, {
            //options
            itemSelector: '.flex-item-masonry',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
    });
}

$('.grid').masonry({
  itemSelector: '.item',
  columnWidth: '.grid-sizer'
});


// GENERAL FORM HANDLER BS 5.X + added global error messages for multistep forms
$('form').submit(function(event) {
    if ($(this).hasClass('selfpostform')) {
        return;
    }
    event.preventDefault();
    var form_jquery = $(this);
    var form = $(this)[0];
    var url = $(this).data("ajaxurl");

    var data = new FormData(form);
    $("button[type=submit]").prop("disabled", true);
    $("button[type=submit] > .send-button-standard").addClass('d-none');
    $("button[type=submit] > .send-button-waiting").removeClass('d-none');
    $('.invalid-feedback').remove();
    $('.is-invalid').removeClass('is-invalid');

    // Clear the global error messages div if it exists
    if ($('#global-error-messages').length > 0) {
        $('#global-error-messages').html('').hide();
    }

    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: url,
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        error: function (data) {
            console.log("error:");
            console.log(data.responseText.replace(/<(?:.|\n)*?>/gm, '').trim());
        },
        success: function(data) {
            try {
                var returndata = $.parseJSON(data);
                if ('errors' in returndata) {
                    console.log(returndata);
                    
                    // Display errors in the individual form inputs
                    $.each(returndata.errors, function(id, errormessage) {
                        // Add error to the individual field
                        if ($("#" + id).hasClass('selectpicker')) {
                            $('[data-id="' + id + '"]').addClass('form-control');
                            $('[name="' + id + '"]').addClass('is-invalid');
                            $('[data-id="' + id + '"]').css('border-color', '#dc3545');
                            $('[data-id="' + id + '"]').after("<div class='invalid-feedback mb-2'>" + errormessage + "<br></div>");
                        } else if (id == "terms_and_conditions") {
                            $('[name="' + id + '"]').addClass('is-invalid');
                            $('[name="terms_and_conditions_error"]').after("<div class='invalid-feedback'>" + errormessage + "</div>");
                        } else {
                            $('[name="' + id + '"]').addClass('is-invalid');
                            $('[name="' + id + '"]').after("<div class='invalid-feedback'>" + errormessage + "</div>");
                        }

                        // Append the error message to the global error div, if it exists
                        if ($('#global-error-messages').length > 0) {
                            $('#global-error-messages').append('<p>' + errormessage + '</p>');
                        }
                    });

                    // Show the global error messages div, if it exists
                    if ($('#global-error-messages').length > 0) {
                        $('#global-error-messages').show();
                    }

                    // Scroll to the first error message
                    $('html,body').animate({
                        scrollTop: $('.invalid-feedback').offset().top - 175
                    });
                } else {
                    if (typeof returndata.redirect != "undefined") {
                        window.location.href = returndata.redirect;
                    } else {
                        form_jquery.replaceWith(returndata.success);
                    }
                }
                jQuery(window).trigger('resize').trigger('scroll');
            } catch (err) {
                console.log("%c---ERROR---", 'background: black; color: white;');
                console.log("%cJS:", 'background: blue; color: white;');
                console.log("%c" + err, 'background: red; color: white;');
                console.log("%cDATA:", 'background: blue; color: white;');
                console.log("%c" + data, 'background: red; color: white;');
                console.log("%c---END OF ERROR---", 'background: black; color: white;');
            }
        },
        complete: function(data) {
            $("button[type=submit]").prop("disabled", false);
            $("button[type=submit] > .send-button-standard").removeClass('d-none');
            $("button[type=submit] > .send-button-waiting").addClass('d-none');
        }
    });
});

// AUTOCLOSE NAVBAR ON CLICK, IGNORE DROPDOWN LINK
$(".navbar-nav > li > a").click(function() {
    if ($(this).hasClass("dropdown-toggle")){
        return;
    }
    $(".navbar-collapse").collapse('hide');
});


// Navbar Dropdown Menu parent clickable
jQuery(function($) {
    if ($(window).width() > 992) {
        $('.navbar .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

        });
        $('.navbar .dropdown > a').click(function() {
            location.href = this.href;
        });

    }
});

// Coloured navbar upon scroll
$(window).scroll(function(){
    if(!$('.navbar-collapse').hasClass('show')){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 0);
    }
});




// Center Carousel thumbnails
const carousel = document.querySelector('#mainCarousel');
const thumbnails = document.querySelectorAll('.carousel-indicators button');

// Make sure carousel exists
if (carousel) {
    // Function to center the active indicator
    const centerActiveIndicator = () => {
        const items = Array.from(carousel.querySelectorAll('.carousel-item'));
        const activeIndex = items.findIndex(item => item.classList.contains('active'));
        const activeThumbnail = thumbnails[activeIndex];
        const container = document.querySelector('.carousel-indicators');
        if (activeThumbnail && container) {
            const thumbnailOffset = activeThumbnail.offsetLeft;
            const thumbnailWidth = activeThumbnail.offsetWidth;
            const containerWidth = container.offsetWidth;
            if (activeIndex === 0) {
                container.scrollLeft = 0;
            } else if (activeIndex === items.length - 1) {
                container.scrollLeft = container.scrollWidth - containerWidth;
            } else {
                container.scrollLeft = thumbnailOffset - (containerWidth / 2) + (thumbnailWidth / 2);
            }
        }
    };

    // Use requestAnimationFrame to optimize DOM updates
    const optimizedUpdate = () => {
        requestAnimationFrame(centerActiveIndicator);
    };

    // Listen for the slid event and center the active indicator
    carousel.addEventListener('slid.bs.carousel', optimizedUpdate);

    // Center the active indicator when page loads
    document.addEventListener('DOMContentLoaded', () => {
        centerActiveIndicator();
    });
}


// Animate on scroll
$(document).ready(function(){
    AOS.init({
        // easing: 'ease-in-out-sine'
        // offset: 50 // adjust as needed

    });
});