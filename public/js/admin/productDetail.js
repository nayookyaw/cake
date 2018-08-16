
updateProducts();
deleteProducts();

function updateProducts() {
	$('.update_product').on('click', function(){
		$('.name_error').empty();
		$('.price_error').empty();

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
					timer: 1000,
				});
				setTimeout(function(){ window.location = "/admin/products" }, 2000);

			},
			error : function (error){
				if (error.responseJSON) {
					if (error.responseJSON.product_name) {
						$('.name_error').text(error.responseJSON.product_name[0]);
					}

					if (error.responseJSON.product_price) {
						$('.price_error').text(error.responseJSON.product_price[0]);
					}
				}

			}
		});

	});
}

function deleteProducts() {
	$('.delete_product').on('click', function(){
		$product_id = $(this).attr('data-index');

		$.ajax({
			url : '/admin/product/delete',
			method : 'delete',
			data : {
				'product_id' : $product_id,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				swal("Sucess Delete", {
					buttons: false,
					timer: 1000,
				});
				setTimeout(function(){ window.location = "/admin/products" }, 2000);

			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});

	});
}