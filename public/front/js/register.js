let type = "student";
$(".register-modal__type-block").on("click", function() {
	$(".register-modal__type-block").each(function(){
	     $(this).removeClass('register-modal__type-checked');
	})
	$(this).addClass("register-modal__type-checked");
	type = $(this).attr('data-type');
    $('#type').val(type);
	if (type === "parent") $('.register-modal__form-input__invite').css("display","block");
	else $('.register-modal__form-input__invite').css("display","none");
});








