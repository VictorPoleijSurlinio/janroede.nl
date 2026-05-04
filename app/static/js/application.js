// @prepros-prepend "../../../../packages/jquery/3.7.0/min/jquery.min.js"
// @prepros-prepend "../../../../packages/jquery-ui/1.12.1/js/jquery-ui.min.js"
// @prepros-prepend "../../../../packages/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
// @prepros-prepend "../../../../packages/bootstrap-select/1.14.0-beta3/js/bootstrap-select.js"
// @prepros-prepend "../../../../packages/lightbox/2.10.0/js/lightbox.min.js"
// @prepros-prepend "../../../../packages/sortable/1.10.2/js/sortable.min.js"
// @prepros-prepend "../../../../packages/slim/5.5.1/js/slim.jquery.min.js"

// @prepros-prepend "../../../../packages/summernote/0.8.18/js/summernote-lite.js"
// @prepros-prepend "../../../../packages/summernote/0.8.18/js/lang/summernote-nl-NL.js"




// NAVBAR ON MOBILE
$(function() {
	$(document).on('click', '.menu-collapse-btn.collapse-in', function() {
		$('#slide-out').css('left', '-185px');
		$('.collapse-in').addClass('collapse-out').removeClass('collapse-in');
	});
	$(document).on('click', '.menu-collapse-btn.collapse-out', function() {
		$('#slide-out').css('left', '-0px');
		$('.collapse-out').addClass('collapse-in').removeClass('collapse-out');
	});
});


$(document).on('click', '.label_searchgroup', function() {
    if($(this).hasClass('label_open')) {
        $(this).removeClass('label_open');
        $(this).parent().find('.list_searchgroup').hide(300);
    }else{
        $(this).addClass('label_open');
        $(this).parent().find('.list_searchgroup').show(300);
    }
});



// Summernote
if($('.rich-text').length){
	$('.rich-text').summernote({
		lang: 'nl-NL',
		tabsize: 4,
		minHeight: '100px',
		maxHeight: '300px',
		height: 200,
		fontSizes: ['8', '10', '11', '12', '13', '14', '15', '16', '17', '18' , '19', '20', '22', '24', '26', '28', '30', '32', '34', '36'],
		toolbar: [
			['style', ['style']],
			['font', ['bold', 'italic', 'underline', 'clear']],
			// ['fontsize', ['fontsize'] ],
			// ['color', ['color']],
			['para', ['ol', 'ul', 'paragraph']],
			// ['table', ['table'] ],
			['insert', ['link']],
			['view', ['fullscreen', 'codeview']]
			],
		fontsize: '16'
	});
}



// GENERAL FORM HANDLER BS 5.X
$('form').submit(function(event) {
	if ($(this).hasClass('selfpostform')){
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
	$('.table_enquete_error').removeClass('table_enquete_error');
	$('.is-invalid').removeClass('is-invalid');
	$('.bootstrap-select > button').css('border-color', '#ced4da');

	$.ajax({
		type: "POST",
		enctype: 'multipart/form-data',
		url: url,
		data: data,
		processData: false,
		contentType: false,
		cache: false,
		timeout: 600000,
        // uh-oh, there was an error trying to do this at all...
        error: function (data) {
        	console.log("error:");
        	console.log(data.responseText.replace(/<(?:.|\n)*?>/gm, '').trim());
            // console.log(data.statusText);
        },
        // made the call and connected to something, woohoo!
        success: function(data) {
        	try{
        		var returndata = $.parseJSON(data);
        		if('errors' in returndata) {
        			console.log(returndata);
        			$.each(returndata.errors, function(id, errormessage){
        				if($("#"+id).hasClass('selectpicker')) {
        					$('[data-id="'+ id +'"]').addClass('form-control');
        					$('[name="'+ id +'"]').addClass('is-invalid');
        					$('[data-id="'+ id +'"]').css('border-color', '#dc3545');
        					$('[data-id="'+ id +'"]').after("<div class='invalid-feedback mb-2'>"+errormessage+"<br></div>");
        				}
        				else if($("#"+id).get(0).tagName == 'DIV') {
                            // div
                            $('#'+id).html("<div class='custom-form-error mb-2'>"+errormessage+"<br></div>");
                        }
        				else if(id == "terms_and_conditions"){
        					$('[name="'+ id +'"]').addClass('is-invalid');
        					$('[name="terms_and_conditions_error"]').after("<div class='invalid-feedback'>"+errormessage+"</div>");
        				}
        				else{
        					$('[name="'+ id +'"]').addClass('is-invalid');
        					$('[name="'+ id +'"]').after("<div class='invalid-feedback'>"+errormessage+"</div>");
        				}
        			});
                    // scroll to error to make it easier for the user
                    $('html,body').animate({
                    	scrollTop: $('.invalid-feedback').offset().top - 175
                    });
                } else {
                	if(typeof returndata.redirect != "undefined") {
                		window.location.href=returndata.redirect;
                	}else if(typeof returndata.toast != "undefined") {
                		$('#toast-succes').toast("show");
                	}else{
                		form_jquery.replaceWith(returndata.success);
                		$('html,body').animate({
                			scrollTop: $('.formreplace-bedankt-div').offset().top - 175
                		});
                	}
                }
                jQuery(window).trigger('resize').trigger('scroll');
            } catch(err) {
            	console.log("%c---ERROR---",'background: black; color: white;');
            	console.log("%cJS:",'background: blue; color: white;');
            	console.log("%c"+err,'background: red; color: white;');
            	console.log("%cDATA:",'background: blue; color: white;');
            	console.log("%c"+data,'background: red; color: white;');
            	console.log("%c---END OF ERROR---",'background: black; color: white;');
            }
        },
        // done with everything! let's put the submit button back to enabled if any
        complete: function (data) {
        	$("button[type=submit]").prop("disabled", false);
        	$("button[type=submit] > .send-button-standard").removeClass('d-none');
        	$("button[type=submit] > .send-button-waiting").addClass('d-none');
        }
    });
});



// input files
$(document).on('change', '.btn-file :file', function() {
	var input = $(this),
	numFiles = input.get(0).files ? input.get(0).files.length : 1,
	label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
	$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
		var input = $(this).parents('.input-group').find(':text'),
		log = numFiles > 1 ? numFiles + ' bestanden geselecteerd' : label;
		if( input.length ) {
			input.val(log);
		} else {
			if( log ) alert(log);
		}
	});
});

$(document).ready(function () {
	$('.btn-file :file').on('fileselect', function (event, numFiles, label) {
		var input = $(this).parents('.input-group').find(':text'), log = numFiles > 1 ? numFiles + ' files selected' : label;
		if (input.length) {
			input.val(log);
		} else {
			if (log) {
				alert(log);
			}
		}
	});
});


// OPEN MODAL WITH DYNAMIC CONTENT
$(document).ready(function(){
    $('.openPopupAddToProject').on('click',function(){

		var myModal = new bootstrap.Modal(document.getElementById('modal_add_to_project'));
		var url = $(this).attr('data-href');
		var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	document.getElementById("modal_body_add_to_project").innerHTML = this.responseText;
		    }
	  	};

	   xhttp.open("GET", url, true);
	   xhttp.send();

       myModal.show();
    });
});
