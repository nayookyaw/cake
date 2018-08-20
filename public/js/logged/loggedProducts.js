
getProducts();
$product_ids = [];

function getProducts() {
	$.ajax({
		url : '/logged/products/all',
		method : 'get',
		data : {
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			$("tbody").append(result);
			setPaging();
			addToOrder();
			disabledClick();
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
}

function setPaging() {
	$("#product_table").pagination();
}

function disabledClick() {
	$(".name,.price, .description, .img").click(function (){
		return false;
	});
}

function addToOrder() {
		$("#product_table tr").click(function(e){
			e.preventDefault();
			$id = $(this).attr('data-index');
      $name = $(this).find("h4").text();
			$price = $(this).find(".price").text();

			$.ajax({
				url : '/logged/products/addOrder',
				method : 'post',
				data : {
					'_token' : $('meta[name="_token"]').attr('content'),
					'id' : $id,
					'name' : $name,
					'price' : $price
				},
				success : function (result) {
					console.log("Added Order lists");
				},
				error : function (error){
					$error = error.responseJSON.error;
					swal({ text: $error });
				}
			});

    });
}
