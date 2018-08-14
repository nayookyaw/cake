$(".login_btn").click(function (e) {
	e.preventDefault();
	$.ajax({
		url : '/login/detail',
		method : 'post',
		data : {
			'username' : $(".username").val(),
			'password' : $(".password").val(),
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			if (result.role == "admin") {
				window.location = "/admin/home";
			} else {
				window.location = "/test";
			}
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
})
