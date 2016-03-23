// Contact Form Validation and Submission
$("#contactForm").validator().on("submit", function (event) {
	if (event.isDefaultPrevented()) {
		contactFormError();
		contactFormSubmit(false, "Please check form for errors and try again.");
	} else {
		event.preventDefault();
		contactFormSubmit();
	}
});
function contactFormSubmit(){
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var message = $("#message").val();
	var human = $("#human").val();

	$.ajax({
		type: "POST",
		url: "contact-email.php",
		data: "name=" + name + "&email=" + email + "&phone=" + phone + "&message=" + message + "&human=" + human,
		success : function(text){
			if (text == "success"){
				contactFormSuccess();
			} else {
				contactFormError();
				contactFormMessage(false,text);
			}
		}
	});
}

function contactFormSuccess(){
	$("#contactForm")[0].reset();
	contactMessageSubmit(true, "Message Submitted!")
}

function contactFormError(){
	$("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).removeClass();
	});
}

function contactFormSubmit(valid, msg){
	if(valid){
		var contactMessageClasses = "alert text-center tada animated alert-success";
	} else {
		var contactMessageClasses = "alert text-center alert-danger";
	}
	$("#contactSubmitMsg").removeClass().addClass(contactMessageClasses).text(msg);
}

// Specials Form Modal
$(document).ready(function(){
	$('#specialsModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget)
	  var special = button.data('special')
	  var modal = $(this)
	  modal.find('.modal-title').text(special)
	  modal.find('.modal-body input#special').val(special)
	});
 });
// Specials Form Validation and Submission
$("#specialsForm").validator().on("submit", function (event) {
	if (event.isDefaultPrevented()) {
		specialsFormError();
		specialsMessageSubmit(false, "Please check form for errors and try again.");
	} else {
		event.preventDefault();
		specialsFormSubmit();
	}
});

function specialsFormSubmit(){
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var special = $("#special").val();
	var message = $("#message").val();
	var contact = $("input[name='contact']:checked:enabled").val();
	var human = $("#human").val();

	$.ajax({
		type: "POST",
		url: "specials-email.php",
		data: "name=" + name + "&email=" + email + "&phone=" + phone + "&special=" + special + "&message=" + message + "&contact=" + contact + "&human=" + human,
		success : function(text){
			if (text == "success"){
				specialsFormSuccess();
			} else {
				specialsFormError();
				specialsFormMessage(false,text);
			}
		}
	});
}

function specialsFormSuccess(){
	$("#specialsForm")[0].reset();
	specialsMessageSubmit(true, "Message Submitted!")
}

function specialsFormError(){
	$("#specialsForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).removeClass();
	});
}

function specialsMessageSubmit(valid, msg){
	if(valid){
		var specialsMessageClasses = "alert text-center tada animated alert-success";
	} else {
		var specialsMessageClasses = "alert text-center alert-danger";
	}
	$("#msgSubmit").removeClass().addClass(specialsMessageClasses).text(msg);
}