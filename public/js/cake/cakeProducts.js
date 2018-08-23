
getProducts();

function getProducts() {
	$.ajax({
		url : '/cake/products/all',
		method : 'get',
		data : {
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			$("tbody").empty().append(result);
			setPaging();
			getDescription();
			searchProducts();
			searchRange();
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

function getDescription() {
	$(".img").click(function (){
		swal($(this).attr('data-value'), {
			buttons: false,
		});
	});
}

function searchRange() {
	$(".search_price").click(function() {
		$min = $(".from").val();
		$max = $(".to").val();
		$.ajax({
			url : '/cake/products/search/price',
			method : 'get',
			data : {
				'min' : $min,
				'max' : $max,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				$("tbody").empty().append(result);
				getDescription();
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});
	});
}

function searchProducts() {
	$('.search_all').on('keyup', function() {
		$search = $(this).val();
		$.ajax({
			url : '/cake/products/search',
			method : 'get',
			data : {
				'search' : $search,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				$("tbody").empty().append(result);
				getDescription();
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});

	});
}
