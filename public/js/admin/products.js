$(window).on ('load', function (){
	getProducts();

});

function getProducts() {
	$.ajax({
		url : '/admin/products/all',
		method : 'get',
		data : {
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			$("tbody").append(result);
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
}

