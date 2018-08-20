
getProducts();
$product_ids = ['1'];
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

function addToOrder() {
	$(".btn_buy").click(function (){
		$("#product_table tr").click(function(){
			$id = $(this).attr('data-index');
      $name = $(this).find("h4").text();
			$price = $(this).find(".price").text();

			// $("#order_form").append("<label class='name'>#{$name}</label><label class='qty'><input type='number' value='1' style='width:2.5em'/></label><label class='price'>2000</label><label class='total'>Total</label>");

    });
	});
}
