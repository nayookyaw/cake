
detailProducts();

function detailProducts() {
	$('.update_product').on('click', function(){
		$product_id = $(this).attr('data-index');
		$product_name = $(".name").val();
		$product_price = $(".price").val();

		$.ajax({
			url : '/admin/product/update',
			method : 'put',
			data : {
				'product_id' : $product_id,
				'product_name' : $product_name,
				'product_price' : $product_price,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				swal("Sucess Update", {
					buttons: false,
					timer: 1500,
				});
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});

	});
}
