
	$('.login').click(function(e) {
		console.log ($('.username').val());
		$.ajax({
			url : '/login',
			method : 'post',
			data : {
				'_token' : $('meta[name="_token"]').attr('content'),
				'username' : $('.username').val(),
				'password' : $('.password').val()
			},
			success : function (result) {
				window.location = "/success"
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});
	});
