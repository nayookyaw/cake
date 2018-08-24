
getProducts();

function getProducts(){
	$.ajax({
		url : '/cake/home/products',
		method : 'get',
		data : {
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
}

function getDescription() {
	$(".img").click(function (){
		swal({
		  title: $(this).attr('p-index'),
		  text: $(this).attr('data-value'),
		  icon: (".."+ $(this).find('img').attr('src')),
		  imageWidth: 400,
		  imageHeight: 200,
		  imageAlt: 'Custom image',
		  animation: false
		})
	});
}
