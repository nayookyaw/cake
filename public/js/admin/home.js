$(window).on ('load', function (){
	console.log ("Woooo Yeah");
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
			console.log (result);
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
}
