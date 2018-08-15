$(window).on ('load', function (){
	getProducts();
	// detailProducts();
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

function detailProducts() {
	$('#product_table').on('click', '.edit_btn', function(){
		$product_id = $(this).attr('data-index');

		$.ajax({
			url : '/admin/product/detail',
			method : 'get',
			data : {
				'product_id' : $product_id,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				$(".content").html(result);
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});

	});
}
