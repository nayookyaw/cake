
calculateSummaryTotal();
closeOrder();
deliveryIndividual();
cancelOrder();

function closeOrder() {
	$(".close_order").click(function (){
		$user_id = $(this).attr('data-index');

		$.ajax({
			url : '/admin/orders/close',
			method : 'delete',
			data : {
				'user_id' : $user_id,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				swal("Sucessful All Deliver", {
					buttons: false,
					timer: 1000,
				});
				setTimeout(function(){ window.location = "/admin/orders" }, 2000);
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});

	});
}

function cancelOrder() {
	$(".btn_order_cancel").click(function() {
		$product_id = $(this).parent().attr('data-value');
		$user_id = $(this).parent().parent().attr('data-value');
		$date = $(this).parent().parent().attr('data-date');

		$.ajax({
			url : '/admin/orders/cancel',
			method : 'delete',
			data : {
				'user_id' : $user_id,
				'product_id' : $product_id,
				'date' : $date,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				swal("Sucessful Order", {
					buttons: false,
					timer: 1000,
				});
				setTimeout(function(){ location.reload(); }, 2000);
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});

	});
}

function deliveryIndividual() {
	$(".btn_delivery_individual").click(function() {
		$order_id = $(this).attr('data-value');
		$user_id = $(this).parent().parent().attr('data-value');

		$.ajax({
			url : '/admin/orders/individual',
			method : 'post',
			data : {
				'order_id' : $order_id,
				'user_id' : $user_id,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				swal("Sucessful Order", {
					buttons: false,
					timer: 1000,
				});
				setTimeout(function(){ location.reload(); }, 2000);
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});
	});
}

function calculateSummaryTotal() {
	$current_total_arr = [];
	$total_tmp = 0;
	$('#order_detail_table tr').each(function() {
		$current_total = $(this).find(".total").text();
		$current_total_arr.push($current_total);
	});
	if ($current_total_arr) {
		$current_total_arr = jQuery.grep($current_total_arr, function(n){ return (n); });
		$current_total_summary = sum($current_total_arr);
		$(".summary").text($current_total_summary);
	}
}

function sum(input){

 if (toString.call(input) !== "[object Array]")
    return false;

    var total =  0;
    for(var i=0;i<input.length;i++)
      {
        if(isNaN(input[i])){
        continue;
         }
          total += Number(input[i]);
       }
     return total;
}
