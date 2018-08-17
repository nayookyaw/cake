
updateProducts();
deleteProducts();
clearImage();
previewImage();

function updateProducts() {
	$('.update_product').on('click', function(){
		$('.name_error').empty();
		$('.price_error').empty();

		$product_id = $(this).attr('data-index');
		$product_img = $("#product_img").attr('data-index');
		$product_name = $(".name").val();
		$product_price = $(".price").val();
		$product_file = $(".file")[0].files[0];

		var form_data = new FormData();
		form_data.append('product_id', $product_id)
		form_data.append('product_img', $product_img)
		form_data.append('product_name', $product_name)
		form_data.append('product_price', $product_price)
		form_data.append('_token', $('meta[name="_token"]').attr('content'))
		form_data.append('product_file' , $product_file);

		$.ajax({
			url : '/admin/product/update',
			method : 'post',
			data : form_data,
			cache: false,
			contentType: false,
			processData: false,
			success : function (result) {
				swal("Sucess Update", {
					buttons: false,
					timer: 1000,
				});
				setTimeout(function(){ window.location = "/admin/products" }, 2000);

			},
			error : function (error){
				if (error.status == 500) {
					swal("Invalid Inputs, Too Large Size", {
						buttons: false,
						timer: 1000,
					});
				}

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
				if (error.status == 500) {
					location.reload();
				}

				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});

	});
}

function clearImage() {
	$(".btn_clear_img").click(function(e) {
		e.preventDefault();
		$("#product_img").attr('data-index', '');
		$(".product_content img").attr('src', 'clear');
		$('.file').val('');
	});
}

function previewImage() {
	$(".file").change(function() {
	  readImage(this);
	});
}

function readImage(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#product_img').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
