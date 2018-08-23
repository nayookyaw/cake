
getProducts();

function getProducts(){
	$.ajax({
		url : '/cake/home/products',
		method : 'get',
		data : {
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			// $(".product_body").empty().append(result);
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
}
