$(window).on ('load', function (){
	getSummary();
});

function getSummary() {
	$.ajax({
		url : '/admin/home/summary',
		method : 'get',
		data : {
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			$("tbody").empty().append(result);
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
}

