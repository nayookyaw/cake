getOrdersTmp();
$product_ids = [];

function getOrdersTmp() {
	$.ajax({
		url : '/logged/orders/tmp/all',
		method : 'get',
		data : {
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			$("tbody").append(result);
			setPaging();
			calculateSummaryTotal();
			calculateTotal();
			calculateWhenChange();
			deleteOrder();
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
}

function deleteOrder() {
	$(".btn_order_delete").click(function (){
		$product_id = $(this).closest('tr').attr('data-index');
		$(this).closest('tr').remove();
		calculateSummaryTotal();

		$.ajax({
			url : '/logged/orders/tmp/delete',
			method : 'delete',
			data : {
				'product_id' : $product_id,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});
	});
}
function setPaging() {
	$("#order_table").pagination();
}

function calculateWhenChange() {
	$("#order_table tr .qty input[type='number']").click(function(e){
		calculateSummaryTotal();
	});
}

function calculateSummaryTotal() {
	$current_total_arr = [];
	$total_tmp = 0;
	$('#order_table tr').each(function() {
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

function calculateTotal() {
	$("#order_table tr .qty input[type='number']").click(function(e){
		$current_qty = $(this).val();
		$current_price = $(this).parent().parent().find(".price").text();
		$current_total = $current_qty * $current_price;

		$(this).parent().parent().find(".total").text($current_total);
	});
}
